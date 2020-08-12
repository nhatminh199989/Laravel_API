<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'tieude'=>$faker->text(50),
        'noidung'=>$faker->text(250)
    ];
});
