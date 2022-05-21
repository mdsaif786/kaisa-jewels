<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\AvailableCurrency::class, function (Faker $faker) {
    return [
        'country_name' => $faker->word,
        'currency_symbol' => $faker->word,
        'short_name' => $faker->word,
        'status' => $faker->word,
    ];
});

