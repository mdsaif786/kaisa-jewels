<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' =>"https://via.placeholder.com/250x365",
        'mrp' => mt_rand(1,1000),
        'price' => mt_rand(1,900),
        'discount' =>mt_rand(1,50),
        'isbn' => $faker->word,
        'book_type' => mt_rand(1,2),
        'description' =>$faker->realText('500'),
        'sku' => $faker->word,
        'weight' =>mt_rand(1,10),
        'dimensions' => $faker->word,
        'no_of_pages' => $faker->randomNumber(),
        'status' => $faker->boolean,
        'slug' => $faker->slug,
        'meta_keywords' => $faker->word,
        'meta_description' => $faker->word,
        'coupon_discount' => $faker->randomFloat(),
        'no_of_qty_for_discount' => $faker->randomNumber(),
        'coupon_code' => $faker->word,
        'isbn_30' => $faker->word,
        'isbn_10' => $faker->word,
        'publication_date' =>Date('Y-m-d'),
        'publication_city_or_country' => $faker->word,
        'handpicked' => $faker->boolean,
        'new_arrival' => $faker->boolean,
        'best_sellers' => $faker->boolean,
        'all_time_classic' => $faker->boolean,
        'no_of_viewed' => $faker->randomNumber(),
        'book_authors_id' =>random_int(\DB::table('authors')->min('id'),\DB::table('authors')->max('id')),
        'publisher_id' =>random_int(\DB::table('publishers')->min('id'),\DB::table('publishers')->max('id')),
        'stock_status_id' =>random_int(\DB::table('stock_statuses')->min('id'),\DB::table('stock_statuses')->max('id')),
        'language_id' =>random_int(\DB::table('languages')->min('id'),\DB::table('languages')->max('id')),
        'category_id' =>random_int(\DB::table('book_categories')->min('id'),\DB::table('book_categories')->max('id')),
        'sub_category_id' =>random_int(\DB::table('book_categories')->min('id'),\DB::table('book_categories')->max('id')),

    ];
});
