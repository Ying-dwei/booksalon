<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

/*  User  */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'pic_id' => $faker->numberBetween(0,5),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt( str_random(6) ),
        'remember_token' => str_random(10)
    ];
});

/*  Book  */

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});

/*  Article  */

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->name,
        'book_id' => $faker->numberBetween(0,10),
        'user_id' => $faker->numberBetween(0,10),
        'domiArc_id' => $faker->numberBetween(0,100)
    ];
});

