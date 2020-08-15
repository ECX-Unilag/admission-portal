<?php

use Faker\Generator as Faker;
use App\Department;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'faculty' => $faker->word,
        'department' => $faker->department,
    ];
});
