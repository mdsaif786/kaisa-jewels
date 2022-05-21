<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\PriceBlock::class, function (Faker $faker) {
    return [
        'block_title' => $faker->word,
        'status' => $faker->word,
        'set_order' => $faker->randomNumber(),
    ];
});

