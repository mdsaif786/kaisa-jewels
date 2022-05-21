<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\BussinessWithUs::class, function (Faker $faker) {
    return [
        'full_name' => $faker->word,
        'email' => $faker->safeEmail,
        'mobile' => $faker->word,
        'message' => $faker->word,
        'city_name' => $faker->word,
        'company_name' => $faker->word,
        'status' => $faker->word,
    ];
});

