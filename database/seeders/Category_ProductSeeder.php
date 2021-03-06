<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class Category_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach ($products as $product){
            if ($product->id % 2 === 0){
                $product->categories()->attach([1,8,9]);
            }else{
                $product->categories()->attach([3,4,6]);
            }

        }
    }
}
