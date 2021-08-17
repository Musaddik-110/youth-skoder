<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    static $nameIntervals = -1;
    static $emailIntervals = -1;
    $name = ["user a", "user b", "user c"];
    $email = ["a@a.com", "b@b.com", "c@c.com"];
    return  [
            'name' => $name[++$nameIntervals],
            'email' => $email[++$emailIntervals],
            'phone' => $faker->numberBetween(1000000000, 2000000000),
            'address' => $faker->address,
            'image' => "15791434845e1fd13c9cf18.jpg",
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // 12345678
            'remember_token' => Str::random(10),
        ];

    // return [
    //     'name' => $faker->name,
    //     'email' => $faker->unique()->safeEmail,
    //     'phone' => $faker->phoneNumber,
    //     'address' => $faker->address,
    //     'image' => "15956534045f1bbd1ca2f7b.jpg",
    //     'email_verified_at' => now(),
    //     'password' => bcrypt('12345678'), // 12345678
    //     'remember_token' => Str::random(10),
    // ];
});
