<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\ContactUs::class, function (Faker $faker) {
    return [
        'full_name' => $faker->word,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'message' => $faker->text,
        'status' => $faker->word,
    ];
});

