<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {

	$title = $faker->name;
    return [
        'uri' => Str::slug($title, '-'),
        'title' => $title,
        'subtitle' => $faker->paragraph(1),
        'content' => $faker->paragraph(10),
        'cover' => "posts/1.jpg",
        'category_id' => 1,
    ];
});
