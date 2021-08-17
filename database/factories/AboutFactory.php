<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {

    return [
        'details' => "<h1>About BUP CF</h1>

<p> </p>

<h3>Establishment          -             01 Jan 2014</h3>

<p> </p>

<h3>Mission</h3>

<p>Creating opportunity to participate in art forms such as Music, Dance, Theatre, Fine arts (Painting, Sketching, Collage etc.) and many other events, like Quiz, Debate, Elocution at Intra and Inter university level to provide students multitude of exposure and experience.</p>

<h3>Vision</h3>

<p>To foster a vibrant environment of extra-curricular activities by identifying and nurturing inherent talent of students in various forms of Arts and to develop leadership qualities, organizing skills and positive relationship among students of different departments.</p>",
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
