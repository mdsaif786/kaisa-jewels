<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Coupon::class, function (Faker $faker) {
    return [
        'coupon_name' => $faker->word,
        'coupon_code' => $faker->word,
        'discount' => $faker->randomFloat(),
        'minimum_amount' => $faker->randomFloat(),
        'coupon_discount_type' => $faker->word,
        'status' => $faker->word,
    ];
});
