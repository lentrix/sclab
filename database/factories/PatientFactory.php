<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    $gender = $faker->randomElement(['female','male']);
    return [
        'lname' => $faker->lastName,
        'fname' => $faker->firstName($gender),
        'phone' => $faker->phoneNumber,
        'gender' => $gender,
        'address' => $faker->address,
        'bdate' => $faker->date
    ];
});
