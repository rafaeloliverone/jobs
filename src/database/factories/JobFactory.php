<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'location' => $faker->address,
        'challenge' => "https://github.com/jobs/{$faker->jobTitle}",
        'description' => $faker->catchPhrase,
        'skills' => $faker->text,
        'job_type' => $faker->numberBetween($min = 1, $max = 2),
        'experience' => $faker->numberBetween($min = 1, $max = 5),
        'range_salary_initial' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 500, $max = NULL),
        'range_salary_final' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 500, $max = NULL),
        'company_id' => $faker->numberBetween($min = 1, $max = 10),
        'hiring_contact' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
