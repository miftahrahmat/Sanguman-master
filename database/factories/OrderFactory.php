<?php

use Faker\Generator as Faker;
use App\Models\Order;

$factory->define(App\Models\Order::class, function (Faker $faker) {
    return [
        'total_portion'	=> $faker->biasedNumberBetween($min = 1, $max = 4),
        'created_at'	=> $faker->dateTime
    ];
});
