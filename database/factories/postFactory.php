<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
   $tittle = $faker->sentence(4);
    return [
    	'user_id' => rand(1,30),
    	'category_id' => rand(1, 20),
        'name'=>$tittle,
        'slug'=> str_slug($tittle),
        'body'=>$faker->text(500),
        'file'=>$faker->imageUrl($width = 1200, $height=400),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
