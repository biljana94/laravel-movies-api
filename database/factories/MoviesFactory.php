<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl,
        'duration' => $faker->numberBetween(60, 240),
        'releaseDate' => $faker->date,
        'genre' => $faker->word,
    ];
});
