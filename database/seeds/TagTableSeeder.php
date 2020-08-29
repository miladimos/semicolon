<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;


class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(Tag::class, 20)->create();
    }
}
