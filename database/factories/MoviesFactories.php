<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movies;
use Faker\Generator as Faker;

$factory->define(Movies::class, function (Faker $faker) {
    $tmp= $faker-> word;

    return [
        'title'=> $tmp,
        'original_title'=> $tmp,
        'nationality'=> $faker -> state,
        'date'=> $faker -> date,
        'vote'=> $faker -> numberBetween(1,1000)*0.01,

    ];
});
