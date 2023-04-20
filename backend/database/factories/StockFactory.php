<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mode = fake()->randomElement(['entrée', 'sortie']);
        $warehouse = null;
        $supplier = null;

        if ($mode == "entrée") {
            $warehouse = Warehouse::all()->random()->id;
            $supplier = Supplier::all()->random()->id;
        }
        return [
            'quantity' => fake()->numberBetween(1, 100),
            'purchase_price' => fake()->randomFloat(2, 0, 10000),
            'mode' => fake()->randomElement(['entrée', 'sortie']),
            'product_id' => Product::all()->random()->id,
            'warehouse_id' => $warehouse,
            'supplier_id' => $supplier,
            'user_id' => User::all()->random()->id,
        ];
    }
}
