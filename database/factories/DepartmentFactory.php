<?php

use Faker\Generator as Faker;
use App\Department;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'faculties_id' => $faker->randomNumber,
        'department' => $faker->word,
    ];
});
