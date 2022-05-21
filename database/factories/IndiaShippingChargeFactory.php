<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\IndiaShippingCharge::class, function (Faker $faker) {
    return [
        'pincode' => $faker->word,
        'circle_name' => $faker->word,
        'taluk' => $faker->word,
        'office_name' => $faker->word,
        'district_name' => $faker->word,
        'region_name' => $faker->word,
        'hq_rate_per_kg' => $faker->word,
        'other_rate' => $faker->word,
        'cod_rate' => $faker->word,
        'total_amount' => $faker->word,
        'status' => $faker->word,
    ];
});
