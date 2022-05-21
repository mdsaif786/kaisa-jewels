<?php

use App\Models\Author;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Carbon;

/** @var Factory $factory */
$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'about_author' => $faker->word,
        'short_caption' => $faker->realText(),
        'profile_image' =>"https://via.placeholder.com/120x120",
        'status' => $faker->boolean,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
