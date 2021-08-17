<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'designation' => "Founder & CEO",
        'about' => $faker->sentence(50),
        'facebook' => $faker->url,
        'twitter' => $faker->url,
        'linkedin' => $faker->url,
        'image' => 'member.jpg',
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
