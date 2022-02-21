<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chart;
use Faker\Generator as Faker;

$factory->define(Chart::class, function (Faker $faker) {
    return [
        'number_of_views' => $faker->numberBetween(100, 2100),
        'view_phones' => $faker->numberBetween(100, 2100),
        'auto_renovados' => $faker->numberBetween(1, 20),
        'ad_id' => function () {
            if (App\Ad::inRandomOrder()->first()) {
                return App\Ad::inRandomOrder()->first()->id;
            } else {
                return 0;
            }
        },
        'updated_at' => $faker->dateTimeBetween('-20 days', 'now'),
    ];
});
