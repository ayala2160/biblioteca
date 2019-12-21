<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estudiante;
use Faker\Generator as Faker;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'computadora_id' => $faker->numberBetween(1, 2),
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'codigo' => $faker->randomNumber(),
        'fecha_nacimiento' => $faker->date(),
    ];
});
