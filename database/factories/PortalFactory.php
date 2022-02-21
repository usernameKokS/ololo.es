<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portal;
use Faker\Generator as Faker;

$factory->define(Portal::class, function (Faker $faker) {
    return [
        'site' => $faker->name,
        'link' => $faker->name,
        // 'status' => $faker->randomElement(['Publicado', 'Publicando', 'No publicado']),
        'status' => $faker->boolean(),
        'tariff' => $faker->randomElement(['silver', 'gold', 'diamond']),
        'time' => 1500,
        'value' => $faker->numberBetween(10, 200),
        
    ];
});
