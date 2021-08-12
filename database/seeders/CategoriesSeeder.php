<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Ideas', 'On Going', 'Completed'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
