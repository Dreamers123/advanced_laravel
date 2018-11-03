<?php

use Faker\Generator as Faker;



$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence(),
        'body' =>$faker->paragraph(random_int(3,5)),
    ];
});


$factory->define(App\Volunteer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'active' =>$faker->boolean(),
        'votes' =>$faker->randomDigit,
    ];
});
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'volunteer_id'=> App\Volunteer::all()->random()->id,
        'title' => $faker->sentence(),
        'body' =>$faker->paragraph(random_int(3,5)),
    ];
});

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'about' =>$faker->paragraph(random_int(3,5)),
    ];
});
$factory->define(App\Website::class, function (Faker $faker) {
    return [
        'url' => $faker->url,

    ];
});
