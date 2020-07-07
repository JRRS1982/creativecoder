<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Project::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomNumber,
        'title' => $faker->sentence(4),
        'intro' => $faker->sentence(2),
        'body' => $faker->paragraph(3),
        'github_link' => $faker->url,
        'external_link' => $faker->url,
        'cover_image_link' => $faker->url,
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];
});
