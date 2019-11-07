<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => Str::slug($faker->sentence()),
        'body'  => $faker->sentence(),
        'views' => rand(0,10),
        'answers' => rand(0,10),
        'votes' => rand(-3,10)
    ];
});
