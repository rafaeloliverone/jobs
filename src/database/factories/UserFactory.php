<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'linkedin' => "https://www.linkedin.com/in/{$faker->userName}/",
        'location' => $faker->timezone,
        'avatar' => $faker->imageUrl($width = 400, $height = 240),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'skills' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'about' => $faker->text,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'cellphone' => $faker->tollFreePhoneNumber,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
