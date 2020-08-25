<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Modules\Backend\Entities\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->text
    ];
});
