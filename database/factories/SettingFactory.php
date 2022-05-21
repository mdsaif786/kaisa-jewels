<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Setting::class, function (Faker $faker) {
    return [
        'key' => $faker->word,
        'value' => $faker->text,
    ];
});
