<?php

use App\Models\Publisher;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => $faker->boolean,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
