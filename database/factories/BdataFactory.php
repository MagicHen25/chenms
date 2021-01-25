<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bdata;
use Faker\Generator as Faker;

$factory->define(Bdata::class, function (Faker $faker) {
    return [
        //
        'bill_type' => $faker->randomElement([4,10,11]),
        'bill_code' => $faker->regexify('[0-9]{12}'),
        'bill_number' => $faker->regexify('[0-9]{8}'),
        'bill_date' => $faker->date("Y-m-d", 'now'),
        'bill_price' => $faker->randomFloat(2, 100, 900),
        'bill_check_number' => strval($faker->randomNumber(6,true)),
        'bill_owner' => $faker->titleMale,
    ];
});
