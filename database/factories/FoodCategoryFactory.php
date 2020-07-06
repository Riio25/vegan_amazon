<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\FoodCategory::class, function (Faker $faker) {
    return [
        'category' => 'fruit'
    ];
});
