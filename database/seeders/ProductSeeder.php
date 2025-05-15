<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Sapi Hitam Legam',
                'weight' => 1000,
                'price' => 20000000,
                'description' => 'Sapi Hitam Legam',
                'category' => 'sapi',
                'color' => 'Hitam',
                'status' => true,
                'age' => 15
            ]
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
