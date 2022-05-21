<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\SearchKeyword::class, function (Faker $faker) {
    return [
        'keyword_name' => $faker->word,
        'ip' => $faker->word,
        'user' => $faker->word,
    ];
});
