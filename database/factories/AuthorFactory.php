<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'about_author' => $faker->text,
        'short_caption' => $faker->word,
        'profile_image' => $faker->word,
        'status' => $faker->boolean,
    ];
});
