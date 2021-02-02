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
        for($i = 1 ; $i <= 30 ; $i++) {
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

            ];
        }
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
