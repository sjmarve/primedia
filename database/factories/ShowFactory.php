<?php

use Faker\Generator as Faker;

$factory->define(App\Show::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->sentence(mt_rand(15,25)),
    ];
});
