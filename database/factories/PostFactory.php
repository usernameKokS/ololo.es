<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            if (App\User::inRandomOrder()->first()) {
                return App\User::inRandomOrder()->first()->id;
            } else {
                return 0;
            }
        },
        'status' => $faker->randomElement(['old', 'create']),
        'category' => $faker->randomElement(['Cat 1', 'Cat 2']),
        'title' => $faker->name,
        'text' => $faker->paragraph(6),
        'worktime' => 'Mañana (10:00 - 22:00)',
        'whatsapp' => $faker->boolean(),
        'name' => $faker->name,
        'age' => $faker->numberBetween(18, 32),
        'phone' => $faker->numberBetween(123123123, 99999999999),
        'archive' => $faker->boolean(),
        'publish' => $faker->boolean(),

    ];
});
