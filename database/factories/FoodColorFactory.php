<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FoodColor;
use Faker\Generator as Faker;

$factory->define(FoodColor::class, function (Faker $faker) {
    return [
        'color' => $faker->colorName,
    ];
});
