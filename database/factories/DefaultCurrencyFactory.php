<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\DefaultCurrency::class, function (Faker $faker) {
    return [
        'rate' => $faker->randomFloat(),
        'country_id' => factory(App\Models\Country::class),
    ];
});

