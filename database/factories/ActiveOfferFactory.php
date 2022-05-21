<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\ActiveOffer::class, function (Faker $faker) {
    return [
        'offer_title' => $faker->word,
        'banner_image' => $faker->word,
        'status' => $faker->word,
        'discount_bracket' => $faker->randomNumber(),
    ];
});

