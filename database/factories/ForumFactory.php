<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Forum;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Forum::class, function (Faker $faker) {
    $index = array_rand(Forum::FORUM_NAMES);
    $site = Forum::FORUM_NAMES[$index];

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
        'site' => $site,
        'login' => $faker->name,
        'password' => $faker->name,
        'phone' => $faker->name,
        'link' => "https://www.". strtolower($site) ."/" . $faker->word,
        'linkModificar' => $faker->name,
        'proxy' => $faker->name,
        'status' => 'active',

        'unixtime_posting' => Carbon::now()->timestamp,
        'unixtime_update' => Carbon::now()->timestamp,
        'unixtime_check' => Carbon::now()->timestamp,

        'updated_at' => $faker->dateTimeBetween('-20 days', 'now'),
    ];
});
