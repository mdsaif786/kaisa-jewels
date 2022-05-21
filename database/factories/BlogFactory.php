<?php


/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'image' => $faker->word,
        'description' => $faker->text,
        'slug' => $faker->slug,
        'meta_keyword' => $faker->word,
        'meta_description' => $faker->text,
        'status' => $faker->word,
        'no_of_view' => $faker->randomNumber(),
        'no_of_likes' => $faker->randomNumber(),
        'blog_category_id' => factory(App\Models\BlogCategory::class),
    ];
});

