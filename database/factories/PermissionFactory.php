<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Permission::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
    ];
});
