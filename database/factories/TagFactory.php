<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $tittle = $faker->unique(4)->word(5);
    return [
        'name'=>$tittle,
        'slug'=> str_slug($tittle),
    ];
});
