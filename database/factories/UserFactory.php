<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(App\Mahasiswa::class, function (Faker $faker) {
    return [
        'niu' => $faker->numberBetween($min = 99999, $max = 999999),
        'nif' => $faker->numberBetween($min = 9999, $max = 99999),
        'nama' => $faker->name,
        'no_telp' =>$faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'alamat' => $faker->address,
        'angkatan' => $faker->year($max = 'now'),
        'no_rek' => $faker->creditCardNumber,
        'nama_pemilik_rek' => $faker->name,
        'bank' => $faker->creditCardType,
        'password' => $faker->password,
        'created_at' => now(),
    ];
});
