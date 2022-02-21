<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Avatar;
use Faker\Generator as Faker;

$factory->define(Avatar::class, function (Faker $faker) {
    return [
        'user_id' => 0,
        'url' => 'https://www.gravatar.com/avatar/default?s=200&r=pg&d=mm',
        'post_id' => 0,
        'active' => $faker->boolean(),
    ];
});
