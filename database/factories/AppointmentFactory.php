<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Appointment;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Date;

$factory->define(Appointment::class, function (Faker $faker) {
    $date = Date::create('2022-10-26');
    return [
        'date' => $date->addDays(rand(1, 10)),
    ];
});
