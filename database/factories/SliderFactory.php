<?php

use App\Models\Slider;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Slider::class, function (Faker $faker) {
    $position=mt_rand(1,2);
    if($position==1){
        $target_url='https://via.placeholder.com/614x325';
    }else {
        $target_url='https://via.placeholder.com/407x225';
    }
    return [
        'slider_name' => $faker->name,
        'slider_image' => $target_url,
        'target_url' =>$target_url,
        'slider_position' =>mt_rand(1,2),
        'status' => $faker->boolean,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
