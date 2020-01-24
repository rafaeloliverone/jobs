<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'location' => $faker->timezone,
        'challenge' => "https://github.com/jobs/{$faker->jobTitle}",
        'description' => $faker->catchPhrase,
        'job_type' => "Full time",
        'experience' => "+{$faker->numberBetween($min = 1, $max = 5)} years",
        'range_salary_initial' => $faker->numberBetween($min = 1000, $max = 9000),
        'range_salary_final' => $faker->numberBetween($min = 10000, $max = 20000),
        'company_id' => $faker->numberBetween($min = 1, $max = 10),
        'hiring_contact' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
