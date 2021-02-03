<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = mt_rand(100000, 700000);
        return [
            'name' => 'Samsung Earbuds',
            'image' => 'computer.png',
            'price' => $price,
            'old_price' => $price *(mt_rand(5,20) / 100) ,
        ];
    }
}
