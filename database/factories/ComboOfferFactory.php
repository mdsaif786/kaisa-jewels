<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\ComboOffer::class, function (Faker $faker) {
    return [
        'offer_title' => $faker->word,
        'price' => $faker->randomFloat(),
        'discount_amount' => $faker->randomFloat(),
        'discount_percentage' => $faker->randomNumber(),
        'category_id' => factory(App\Models\BookCategory::class),
        'sub_category_id' => factory(App\Models\BookCategory::class),
    ];
});

