<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rate;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
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
        'price' => $faker->numberBetween(100, 1000),

    ];
});


// 'country' => function () {
// 	if(App\Count::inRandomOrder()->first()){
// 		return App\Count::inRandomOrder()->first()->title;
// 	} else {
// 		return 0;
// 	}
// },
