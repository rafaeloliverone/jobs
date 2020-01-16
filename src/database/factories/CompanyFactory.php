<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'photo' => $faker->imageUrl($width = 400, $height = 240),
        'description' => $faker->text,
        'website' => $faker->url,
        'linkedin' => "https://www.linkedin.com/in/{$faker->userName}/",
        'twitter' => "https://www.twitter.com/{$faker->userName}/",
        'location' => $faker->timezone,
    ];
});
