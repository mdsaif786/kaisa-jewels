<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Address::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'alternate_phone' => $faker->word,
        'address_1' => $faker->text,
        'pincode' => $faker->randomNumber(),
        'city' => $faker->city,
        'additional_note' => $faker->word,
        'address_2' => $faker->text,
        'user_id' => factory(App\Models\User::class),
        'country_id' => factory(App\Models\Country::class),
        'zone_id' => factory(App\Models\Zone::class),
    ];
});
