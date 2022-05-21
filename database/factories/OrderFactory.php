<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Order::class, function (Faker $faker) {
    return [
        'invoice_no' => $faker->word,
        'invoice_prefix' => $faker->word,
        'shipping_charge' => $faker->word,
        'gst_amount' => $faker->word,
        'coupon' => $faker->word,
        'coupon_discount' => $faker->word,
        'payment_reference' => $faker->word,
        'ip' => $faker->word,
        'is_completed' => $faker->randomNumber(),
        'order_amount' => $faker->randomFloat(),
        'user_agent' => $faker->text,
        'total_book_amount' => $faker->word,
        'payment_method' => $faker->word,
        'payment_status' => $faker->word,
        'order_date' => $faker->word,
        'order_key' => $faker->word,
        'order_status_id' => factory(App\Models\OrderStatus::class),
        'address_id' => factory(App\Models\Address::class),
    ];
});
