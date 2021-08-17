<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alumni;
use Faker\Generator as Faker;

$factory->define(Alumni::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'designation' => "Chairman",
        'facebook' => $faker->url,
        'twitter' => $faker->url,
        'linkedin' => $faker->url,
        'image' => 'member.jpg',
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
