<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\LoginIp::class, function (Faker $faker) {
    return [
        'user' => $faker->word,
        'ip' => $faker->word,
        'status' => $faker->word,
    ];
});
