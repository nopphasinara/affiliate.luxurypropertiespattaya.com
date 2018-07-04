<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->unique()->name,
        'description' => $fkaer->paragraphs($nb = 3, $asText = false),
        'keywords' => $faker->slug($nbWords = 6, $variableNbWords = true),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
