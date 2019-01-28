<?php

use Faker\Generator as Faker;
use App\User;
use App\Models\Order;

$factory->define(App\Models\Portion::class, function (Faker $faker) {
    return [
        'user_id'		=>factory(User::class)->create()->id,
        'order_id'		=>factory(Order::class)->create()->id,
        'portion'		=>factory(Order::class)->create()->total_portion
    ];
});
