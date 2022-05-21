<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\AuditLog::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
        'subject_id' => $faker->randomNumber(),
        'subject_type' => $faker->word,
        'user_id' => $faker->randomNumber(),
        'properties' => $faker->text,
        'host' => $faker->word,
    ];
});
