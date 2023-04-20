<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Pos::factory(3)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Tva::factory(3)->create();
        \App\Models\Warehouse::factory(6)->create();
        \App\Models\Supplier::factory(20)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Image::factory(20)->create();
        \App\Models\Stock::factory(50)->create();
    }
}
