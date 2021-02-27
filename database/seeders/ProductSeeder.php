<?php

namespace Database\Seeders;

use App\Models\Product;
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
        for($i = 1 ; $i <= 60 ; $i++) {
            $products = [
                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'sale' => 1500,
                    'price' => 2500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'price' => 1500,
                    'sale' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'sale' => 1500,
                    'price' => 2500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'sale' => 1500,
                    'price' => 2500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'sale' => 1500,
                    'price' => 2500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'price' => 1500,
                    'sale' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ];
        foreach ($products as $product) {
            Product::create($product);
        }

        }
    }
}
