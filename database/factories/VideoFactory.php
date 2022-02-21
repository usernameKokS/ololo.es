<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'user_id' => 0,
        'url' => 'https://s3.pstatp.com/aweme/resource/web/static/image/index/tvc-v2_30097df.mp4',
        'post_id' => 0,
        'active' => $faker->boolean(),
    ];
});
