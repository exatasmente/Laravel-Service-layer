<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contract;
use App\Models\Property;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'property_id' => factory(Property::class)->create()->id,
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->name,
        'document_type' => $faker->randomElement([Contract::DOCUMENT_TYPE_CPF,Contract::DOCUMENT_TYPE_CNPJ]),
        'document' => $faker->word,
    ];
});
