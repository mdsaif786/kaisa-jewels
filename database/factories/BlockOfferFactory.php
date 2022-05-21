<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\BlockOffer::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'offer_type' => $faker->word,
        'general_discount' => $faker->randomNumber(),
        'status' => $faker->word,
    ];
});

