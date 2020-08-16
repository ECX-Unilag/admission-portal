<?php

use Faker\Generator as Faker;

$factory->define(App\Applicant::class, function (Faker $faker) {
    return [
        'application_number' => $faker->randomNumber,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'middlename' => $faker->firstName,
        'date_of_birth' => $faker->date,
        'phone_no' => $faker->tollFreePhoneNumber,
        'email' => $faker->email,
        'password' => $faker->password,
        'department' => $faker->word,
        'enrollment_type' => $faker->word,
        'jamb_no' => $faker->randomNumber,
        'jamb_score' => $faker->randomNumber,
        'gender' => $faker->randomElement(['Male', 'Female']),
        'marital_status' => $faker->randomElement(['single', 'Married', 'Divorced', 'Other']),
        'state_of_origin' => $faker->state,
        'local_government' => $faker->city,
        'home_town' => $faker->city,
        'home_address' => $faker->address,
        'applicant_passport' => $faker->word,
        'course' => $faker->word,
        'religion' => $faker->word,
        'address' => $faker->address,
        'genotype' => $faker->randomElement(['AA', 'AS', 'SS']),
        'bloodgroup' => $faker->randomElement(['A', 'B', 'AB', 'O']),
        'session' => $faker->year.'-'.$faker->year,
        'admission_status' => $faker->randomElement(['admitted', 'processing', 'rejected']),
        'admission_batch' => $faker->randomElement(['A', 'B', 'C']),
        'school_id' => $faker->randomNumber,
        'register_status' => $faker->randomElement(['started', 'in progress', 'finished']),
    ];
});
