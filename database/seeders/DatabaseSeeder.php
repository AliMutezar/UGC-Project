<?php

namespace Database\Seeders;

use App\Models\ShipmentHistory;
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

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            // ShipmentHistorySeeder::class,
            // ShipmentSeeder::class
        ]);
    }
}
