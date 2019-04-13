<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(1000, 6900),
        'stock' => $faker->numberBetween(10, 90),
        'discount' => $faker->numberBetween(10, 30)
    ];
});
