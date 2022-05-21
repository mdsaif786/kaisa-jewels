<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\OrderItem::class, function (Faker $faker) {
    return [
        'quantity' => $faker->randomNumber(),
        'unit_price' => $faker->randomFloat(),
        'price' => $faker->randomFloat(),
        'gst_amount' => $faker->randomFloat(),
        'total_amount' => $faker->randomFloat(),
        'cart_item_type' => $faker->word,
        'order_id' => factory(App\Models\Order::class),
        'book_id' => factory(App\Models\Book::class),
        'collection_book_id' => factory(App\Models\CollectionBook::class),
    ];
});
