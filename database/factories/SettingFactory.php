<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {


    static $keyIntervals = -1;
    static $valueIntervals = -1;
    $key = ["Phone", "Email", "Facebook","Twitter","Youtube"];
    $value = ["+88 018 33 99 6321", "support@bupaf.com", "https://facebook.com","https://twitter.com","https://youtube.com"];
    return [
        'key' => $key[++$keyIntervals],
        'value' => $value[++$valueIntervals],
    ];
});
