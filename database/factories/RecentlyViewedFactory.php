<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\RecentlyViewed::class, function (Faker $faker) {
    return [
        'date_time' => $faker->word,
        'url' => $faker->url,
        'user' => $faker->word,
        'ip' => $faker->word,
        'book_id' => factory(App\Models\Book::class),
        'collection_book_id' => factory(App\Models\CollectionBook::class),
    ];
});
