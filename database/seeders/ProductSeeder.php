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
        $products = [
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                 'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
             [
                 'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500
            ],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500
            ],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500
            ],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => null],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500],
            [
                'name' => 'Samsung Earbuds',
                'img' => 'computer.png',
                'price' => 1500,
                'old_price' => 2500
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
