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
            'Sport', 'Policy', 'Food', 'Programming', 'Network', 'Iran'
        ];
//        CategoryFactory::new()->count(5)->create();
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'en_name' => $category,
                'en_slug' => $category,
            ]);
        }

    }
}
