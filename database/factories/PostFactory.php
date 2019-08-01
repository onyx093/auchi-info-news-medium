<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'admin_id' => $faker->numberBetween(1, 5),
        'category_id' => $faker->numberBetween(1, 10),
        'title' => $faker->sentence,
        'image' => $faker->image,
        'content' => $faker->text(2000),
    ];
});
