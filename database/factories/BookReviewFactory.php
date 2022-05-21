<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\BookReview::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'review_point' => $faker->randomNumber(),
        'message' => $faker->text,
        'status' => $faker->word,
        'book_id' => factory(App\Models\Book::class),
        'user_id' => factory(App\Models\User::class),
    ];
});
