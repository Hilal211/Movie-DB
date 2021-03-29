<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define( Contact::class, function ( Faker $faker ) {
    return [
        'subject'      => $faker->sentence( 7, true ),
        'name'         => $faker->name,
        'address'      => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'message'      => $faker->paragraph( 2, true ),
        'email'        => $faker->unique()->safeEmail,
    ];
} );
