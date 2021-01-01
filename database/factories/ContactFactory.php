<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'subject' => $faker->sentence,
        'message' => $faker->text
    ];
});
