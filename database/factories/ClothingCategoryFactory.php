<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\clothing_category;
use Faker\Generator as Faker;

$factory->define(clothing_category::class, function (Faker $faker) {
    return [
        'category' => $faker->colorName,
    ];
});
