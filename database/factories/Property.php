<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'owner_email' => $faker->unique()->safeEmail,
        'line_1' => $faker->streetAddress,
        'line_2' => $faker->secondaryAddress,
        'number' => $faker->randomDigit,
        'state' => $faker->state,
        'city' => $faker->city,
        'borough' => $faker->word,
    ];
});
