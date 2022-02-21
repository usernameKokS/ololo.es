<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ad;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Ad::class, function (Faker $faker) {
    return [
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
        'login' => $faker->name,
        'password' => $faker->name,
        'phone' => $faker->name,
        'link' => $faker->name,
        'linkModificar' => $faker->name,
        'proxy' => $faker->name,
        'status' => 'active',
        
        'unixtime_posting' => Carbon::now()->timestamp,
        'unixtime_update' => Carbon::now()->timestamp,
        'unixtime_check' => Carbon::now()->timestamp,

        'site' => function () {
            if (App\Portal::inRandomOrder()->first()) {
                return App\Portal::inRandomOrder()->first()->site;
            } else {
                return 0;
            }
        },
        'number_of_views' => $faker->numberBetween(100, 2100),
        'view_phones' => $faker->numberBetween(100, 2100),
        'contacted_by_email' => $faker->numberBetween(1, 20),
        'auto_renovados' => $faker->numberBetween(1, 20),
        'shared_information' => $faker->numberBetween(1, 20),

        'number_of_views2' => $faker->numberBetween(100, 500),
        'view_phones2' => $faker->numberBetween(100, 500),
        'auto_renovados2' => $faker->numberBetween(1, 10),

    ];
});
