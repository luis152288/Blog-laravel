<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$tittle = $faker->sentence(4);
    return [
        'name'=>$tittle,
        'slug'=> str_slug($tittle),
        'body'=>$faker->text(500),
    ];
});
