<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\CurrencyConversion::class, function (Faker $faker) {
    return [
        'from_date' => $faker->dateTime(),
        'to_date' => $faker->word,
        'rate' => $faker->randomFloat(),
        'country_id' => factory(App\Models\Country::class),
    ];
});

