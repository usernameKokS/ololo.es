<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Remain;
use Faker\Generator as Faker;

$factory->define(Remain::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => function () {
            if (App\User::inRandomOrder()->first()) {
                return App\User::inRandomOrder()->first()->id;
            } else {
                return 0;
            }
        },
        'post_id' => function () {
            if (App\Post::inRandomOrder()->first()) {
                return App\Post::inRandomOrder()->first()->id;
            } else {
                return 0;
            }
        },
    ];
});
