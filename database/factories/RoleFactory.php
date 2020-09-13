<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'slug' => \Illuminate\Support\Str::slug($faker->colorName),
    ];
});
