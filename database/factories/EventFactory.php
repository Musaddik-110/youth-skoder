<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {

    return [
        'title' => "Intra BUP DevOps Tournament - 2021",
        'details' => $faker->sentence(500),
        'date' => '2021-06-14',
        'place' => "Bup Bijoy Audotorium.",
        'time' => $faker->time,
        'image' => "event.png",
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
