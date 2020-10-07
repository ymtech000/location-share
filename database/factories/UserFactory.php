<?php

use App\User;
use App\Model;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    Storage::fake('local');

    $file = UploadedFile::fake()->image('dummy.jpg', 800, 800);

    Storage::disk('local')->assertExists($file->name);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        // 'password'  => bcrypt('test0000'),
        'image' => $file,
        'introduction' => $faker->text,
        'remember_token' => Str::random(10),
    ];
});
