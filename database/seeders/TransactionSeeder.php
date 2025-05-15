<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [

                'invoice' => 'INV-001',
                'total' => 20000000,
                'status' => 'pending',
                'user_id' => 2,
                'product_id' => 1,
                'date_pay' => now(),
            ]
        ];

        foreach ($transactions as $transaction) {
            \App\Models\Transaction::create($transaction);
        }
    }
}
