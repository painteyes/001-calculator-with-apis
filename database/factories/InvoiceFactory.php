<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use Faker\Generator as Faker;
use App\Customer;

$factory->define(Invoice::class, function (Faker $faker) {

    $status = $faker->randomElement(['B','P','V']);

    return [
        'customer_id' => factory(App\Customer::class),
        'amount'  => $faker->numberBetween(100, 2000),
        'status' => $status,
        'billed_date' => $faker->dateTimeThisDecade(),
        'paid_date' => $status == 'P' ? $faker->dateTimeThisDecade() : NULL
    ];
});
