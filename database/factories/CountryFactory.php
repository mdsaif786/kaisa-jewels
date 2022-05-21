<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'short_code' => $faker->word,
        'shipping_allow' => $faker->word,
        'shipping_charge' => $faker->word,
    ];
});
