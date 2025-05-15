<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\MidtransService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Midtrans\Notification;
use Midtrans\Config;

class TransactionController extends Controller
{
    public function pay(Transaction $transaction, MidtransService $midtransService)
    {
        $snap = $midtransService->createTransaction($transaction);

        return response()->json([
            'snap_token' => $snap->token,
            'redirect_url' => $snap->redirect_url,
        ]);
    }

    public function createAndPay(Request $request, MidtransService $midtransService)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $product = \App\Models\Product::findOrFail($request->product_id);
        $invoice = 'INV-' . strtoupper(uniqid());

        $transaction = Transaction::create([
            'invoice' => $invoice,
            'total' => $product->price,
            'status' => 'pending',
            'user_id' => $request->user_id,
            'product_id' => $product->id,
        ]);

        $snap = $midtransService->createTransaction($transaction);

        return response()->json([
            'snap_token' => $snap->token,
            'redirect_url' => $snap->redirect_url,
        ]);
    }

    public function notificationHandler(Request $request)
    {
        // Setup Midtrans server key if not set globally
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');

        try {
            $notification = new Notification();

            $transactionStatus = $notification->transaction_status;
            $paymentType = $notification->payment_type;
            $orderId = $notification->order_id;
            $fraudStatus = $notification->fraud_status;

            $transaction = Transaction::where('invoice', $orderId)->first();

            if (!$transaction) {
                Log::error("Transaction not found for order_id: {$orderId}");
                return response()->json(['message' => 'Transaction not found'], 404);
            }

            switch ($transactionStatus) {
                case 'capture':
                    if ($paymentType == 'credit_card') {
                        if ($fraudStatus == 'challenge') {
                            $transaction->status = 'challenge';
                        } else {
                            $transaction->status = 'lunas';
                            $transaction->date_pay = now();
                        }
                    }
                    break;

                case 'settlement':
                    $transaction->status = 'lunas';
                    $transaction->date_pay = now();
                    break;

                case 'pending':
                    $transaction->status = 'pending';
                    break;

                case 'deny':
                case 'cancel':
                case 'expire':
                    $transaction->status = 'failed';
                    break;

                default:
                    $transaction->status = 'unknown';
                    break;
            }

            $transaction->save();

            return response()->json(['message' => 'Notification handled']);
        } catch (\Exception $e) {
            Log::error('Midtrans notification error: ' . $e->getMessage());
            return response()->json(['message' => 'Error handling notification'], 500);
        }
    }
}
