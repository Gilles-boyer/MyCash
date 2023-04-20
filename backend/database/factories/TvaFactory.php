<?php

namespace Database\Factories;

use App\Models\Tva;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tva>
 */
class TvaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rate = fake()->randomFloat(2, 0, 20);
        return [
            'name' => "tva $rate%",
            'rate' => $rate
        ];
    }
}
