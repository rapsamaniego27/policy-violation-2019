<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Student;
use Illuminate\Support\Facades\Hash;

$factory->define(Student::class, function (Faker $faker) {
    return [
       'first_name' => $faker->firstName,
       'last_name' => $faker->lastName,
       'email' => $faker->email,
       'password' => Hash::make('password')
    ];
});
