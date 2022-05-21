<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\BookCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => $faker->word,
        'show_in_mega_menu' => $faker->word,
        'show_in_menu' => $faker->word,
        'slug' => $faker->slug,
        'meta_keywords' => $faker->word,
        'meta_description' => $faker->word,
        'set_order' => $faker->randomNumber(),
        'parent_id' => $faker->randomNumber(),
    ];
});
