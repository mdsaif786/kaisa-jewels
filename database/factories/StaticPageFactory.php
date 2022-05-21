<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\StaticPage::class, function (Faker $faker) {
    return [
        'page_name' => $faker->word,
        'page_title' => $faker->word,
        'page_description' => $faker->text,
        'slug' => $faker->slug,
        'meta_keywords' => $faker->word,
        'meta_description' => $faker->word,
        'static_page_type_id' => factory(App\Models\StaticPageType::class),
    ];
});
