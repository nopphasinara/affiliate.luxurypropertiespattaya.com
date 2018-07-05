<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $faker->unique()->slug(),
        'description' => $faker->paragraphs($nb = 3, $asText = true),
        'keywords' => $faker->words($nb = 3, $asText = true),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
