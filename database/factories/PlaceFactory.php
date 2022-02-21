<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Place;
use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {

    $province = $faker->country;
    $town = $faker->city;
    $string = $province . ', ' . $town;

    return [
        'string' => $string,
        'province' => $province,
        'town' => $town,
    ];
});
