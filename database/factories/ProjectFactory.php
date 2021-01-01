<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(\App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'large_image' => 'posts/large_image/img.jpg',
        'user_id' => \App\User::all()->random()
    ];
});
