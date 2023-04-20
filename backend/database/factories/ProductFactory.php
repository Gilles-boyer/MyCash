<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Tva;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'sales_price' => fake()->randomFloat(2, 0, 1000),
            'category_id' => Category::all()->random()->id,
            'tva_id' => Tva::all()->random()->id
        ];
    }
}
