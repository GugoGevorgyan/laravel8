<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 60; $i++) {
            $products = [
                [
                    'name' => 'computer',
                    'img' => 'computer.png',
                    'description' => 'comp',
                    'price' => 2000,
                    'sale' => 1800,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'description' => 'dd',
                    'price' => 1500,
                    'sale' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'comp',
                    'img' => 'computer.png',
                    'description' => 'ee',
                    'price' => 3000,
                    'sale' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'LG Comp',
                    'img' => 'computer.png',
                    'description' => 'ss',
                    'price' => 3500,
                    'sale' => 999,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Aple',
                    'img' => 'computer.png',
                    'description' => 'qq',
                    'price' => 2500,
                    'sale' => 1500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Samsung Earbuds',
                    'img' => 'computer.png',
                    'description' => 'vv',
                    'price' => 1500,
                    'sale' => null,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ];
            Product::insert($products);
        }
    }
}
