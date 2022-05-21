<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\CollectionBook::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'image' => $faker->word,
        'mrp' =>mt_rand(100,500),
        'price' =>mt_rand(100,500),
        'discount' =>mt_rand(10,50),
        'weight' =>mt_rand(1,50),
        'sku' => $faker->word,
        'status' => $faker->word,
        'slug' => $faker->slug,
        'meta_keywords' => $faker->word,
        'meta_description' => $faker->word,
        'stock_status_id' =>random_int(\DB::table('stock_statuses')->min('id'),\DB::table('stock_statuses')->max('id')),
        'language_id' =>random_int(\DB::table('languages')->min('id'),\DB::table('languages')->max('id')),
        'category_id' =>random_int(\DB::table('book_categories')->min('id'),\DB::table('book_categories')->max('id')),
        'sub_category_id' =>random_int(\DB::table('book_categories')->min('id'),\DB::table('book_categories')->max('id')),
    ];
});
