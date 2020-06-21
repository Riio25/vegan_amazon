<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clothing;
use Faker\Generator as Faker;

$factory->define(Clothing::class, function (Faker $faker) {
    return [
        'description' => ' ',
        'category_id' => factory(\App\clothing_category::class),
        'price' => $faker->numberBetween(1.00, 25.00)
    ];
});
