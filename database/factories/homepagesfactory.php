<?php

use Faker\Generator as Faker;

$factory->define(App\homepage::class, function (Faker $faker) {
    return [
'home'=>$faker->sentence(10)
        //
    ];
});
