<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\WishList::class, function (Faker $faker) {
    return [
        'ip' => $faker->word,
        'user_id' => factory(App\Models\User::class),
        'book_id' => factory(App\Models\Book::class),
    ];
});

