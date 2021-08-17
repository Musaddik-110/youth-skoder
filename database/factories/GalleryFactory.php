<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gallery;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {

    static $intervals = -1;
    static $typeIntervals = -1;
    $type = ["Slider", "Slider", "Slider","Gallery", "Gallery", "Gallery", "Gallery", "Gallery", "Gallery", "Gallery", "Gallery", "Gallery",];
    $image = ["slider1.jpg", "slider2.jpg", "slider3.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg", "gallery.jpg",];
    return [
        'type' => $type[++$typeIntervals],
        'image' => $image[++$intervals]
    ];
});
