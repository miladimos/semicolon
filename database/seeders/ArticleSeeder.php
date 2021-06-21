<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleFactory::new()->for(UserFactory::new())->count(15)->create();
    }
}
