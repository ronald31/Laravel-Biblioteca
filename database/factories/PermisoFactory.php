<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'slug' => $faker->unique()->safeEmail,
    ];
});
