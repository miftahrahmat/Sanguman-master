<?php

use Faker\Generator as Faker;
use App\Models\TakeLog;
use App\Models\Portion;

$factory->define(App\Models\TakeLog::class, function (Faker $faker) {
    return [
        'portion_id'=>factory(Portion::class)->create()->id,
        'taked_at'	=>$faker->dateTime,
        'portion'	=>factory(Portion::class)->create()->portion
    ];
});
