<?php

use Faker\Generator as Faker;

$factory->define(App\AdChannel::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
    ];
});
