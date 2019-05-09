<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {
    return [
        'generic' => $faker->text(30),
        'brand' => $faker->company,
        'description' => $faker->realText(40),
        'price' => $faker->randomFloat(2,10,4000),
        'qty_stock' => $faker->numberBetween(20,100),
    ];
});
