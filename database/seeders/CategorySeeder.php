<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Sport', 'Policy', 'Food', 'Programming', 'Network', 'Iran', "news"
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }

    }
}
