<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  =>  'Cargo Laut',
            'slug'  =>  'cargo-laut'
        ]);

        Category::create([
            'name'  =>  'Cargo Darat',
            'slug'  =>  'cargo-darat'
        ]);
    }
}
