<?php

namespace Database\Seeders;

use App\Models\Shop;
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
        // \App\Models\User::factory(10)->create();
        Shop::factory()->count(50)->online()->create();
        Shop::factory()->count(50)->brickAndMortar()->create();
        Shop::factory()->count(25)->hybrid()->create();
    }
}
