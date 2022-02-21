<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tariff;
use Faker\Generator as Faker;

$factory->define(Tariff::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->randomElement(['silver', 'gold', 'diamond']),
        'start' => $faker->dateTimeBetween('-20 days', 'now'),
        'end' => $faker->dateTimeBetween('now', '+20 days'),
        'currency' => 'EU',
        'status' => 'complete',
        'price' => 234,
        'order_number' => 345425217,
        'post_id' => function () {
            if (App\Post::inRandomOrder()->first()) {
                return App\Post::inRandomOrder()->first()->id;
            } else {
                return 0;
            }
        },
        'user_id' => function () {
            if (App\User::inRandomOrder()->first()) {
                return App\User::inRandomOrder()->first()->id;
            } else {
                return 0;
            }
        },

    ];
});
