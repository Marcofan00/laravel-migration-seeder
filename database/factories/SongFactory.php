<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'length'=> $faker -> numberBetween(30, 600),
        'single'=> $faker -> boolean(),
        'cover'=> $faker->imageUrl(640, 480, 'animals', true),
        'release_date'=> $faker->dateTime(),
    ];
});
