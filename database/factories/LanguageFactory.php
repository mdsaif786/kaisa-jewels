<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Language::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'is_active' => $faker->word,
    ];
});
