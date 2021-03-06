<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $productName = $faker->word;
    return [
        'sku' => str_limit($productName, 3,'').'-'.$faker->unique()->numberBetween(1,99),
        'name' => $faker->colorName.' '.$productName,
        'price' => $faker->numberBetween(1,25)
    ];
});
