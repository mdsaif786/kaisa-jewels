<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Faq::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'answer' => $faker->text,
        'faq_category_id' => factory(App\Models\FaqCategory::class),
    ];
});

