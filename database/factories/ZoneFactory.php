<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Zone::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->word,
        'status' => $faker->word,
        'country_id' => factory(App\Models\Country::class),
    ];
});
