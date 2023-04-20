<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    static public $counter = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        self::$counter++;
        $imageLink = file_get_contents(fake()->imageUrl(360, 360, 'animals', true, 'cats'));
        return [
            'name' => fake()->word(),
            'data' => base64_encode($imageLink),
            'product_id' => self::$counter,
        ];
    }
}
