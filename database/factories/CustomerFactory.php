<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {

    $type = $this->faker->randomElement(['I', 'B']);
    $name = $type == 'I' ? $this->faker->name() : $this->faker->company();

    return [
        'name' => $name,
        'type' => $type,
        'email' => $faker->email(),
        'address' => $faker->streetAddress(),
        'city' => $faker->city(),
        'state' => $faker->state(),
        'postal_code' => $faker->postCode(),
    ];
});
