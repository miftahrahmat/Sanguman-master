<?php

use Faker\Generator as Faker;
use App\Models\Chef;
use App\Models\Order;
use App\User;

$factory->define(App\Models\Chef::class, function (Faker $faker) {
    return [
        'order_id'	=>factory(Order::class)->create()->id,
        'user_id'	=>factory(User::class)->create()->id,
        'picked_at' =>$faker->dateTime
    ];
});
