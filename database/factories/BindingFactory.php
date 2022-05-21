<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Binding::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => $faker->word,
    ];
});
