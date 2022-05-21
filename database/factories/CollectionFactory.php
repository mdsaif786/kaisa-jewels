<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Collection::class, function (Faker $faker) {
    return [
        'collection_name' => $faker->word,
        'banner_image' => $faker->word,
        'status' => $faker->word,
    ];
});

