<?php

namespace App\Services;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaction;

class MidtransService
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createTransaction(Transaction $transaction)
    {
        $params = [
            'transaction_details' => [
                'order_id' => $transaction->invoice,
                'gross_amount' => $transaction->total,
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email,
            ],
            'item_details' => [
                [
                    'id' => $transaction->product->id,
                    'price' => $transaction->product->price,
                    'quantity' => 1,
                    'name' => $transaction->product->name,
                ],
            ],
        ];

        return Snap::createTransaction($params);
    }
}
