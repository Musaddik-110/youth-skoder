<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    static $nameIntervals = -1;
    static $emailIntervals = -1;
    static $adminIntervals = -1;
    $name = ["Super Admin", "Secret Admin", "Default Admin"];
    $email = ["admin@admin.com", "secret@admin.com", "default@admin.com"];
    $adminStatus = [1, 1, 0];
    return  [
        'name' => $name[++$nameIntervals],
        'email' => $email[++$emailIntervals],
        'super_admin' => $adminStatus[++$adminIntervals],
        'password' => bcrypt(456456456),
        'remember_token' => Str::random(10),
    ];
});
