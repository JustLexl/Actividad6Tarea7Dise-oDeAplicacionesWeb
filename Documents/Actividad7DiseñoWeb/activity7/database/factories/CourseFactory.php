<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Material;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(4),
        'coursecover' => $faker->imageUrl(640, 480, 'technics', true),
        'content' => $faker->paragraphs(3, true),
        'material_id' => Material::inRandomOrder()->first()->id ?? 1,
    ];
});
