<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movies;
use Faker\Generator as Faker;

$factory->define(Movies::class, function (Faker $faker) {
    return [
        'title'=> $faker -> word,
        'original_title'=> $faker -> title ,
        'nationality'=> $faker -> state,
        'date'=> $faker -> date,
        'vote'=> $faker -> numberBetween(1,10),

    ];
});
