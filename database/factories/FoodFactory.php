<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Food;
use Faker\Generator as Faker;

$factory->define(Food::class, function (Faker $faker) {
    return [
        'category' => factory(App\FoodCategory::class),
        'color' => factory(App\FoodColor::class),
        'price' => $faker->numberBetween(1.00, 25.00)
    ];
});
