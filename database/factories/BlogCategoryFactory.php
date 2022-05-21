<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\BlogCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug,
        'meta_title' => $faker->word,
        'meta_description' => $faker->text,
        'status' => $faker->word,
    ];
});

