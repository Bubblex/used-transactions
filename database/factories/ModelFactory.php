<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Models\User;

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->safeEmail,
//         'password' => bcrypt(str_random(10)),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(User::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    $initialTime = date('Y-m-d H:i:s', $faker->unixTime($max = 'now'));
    
    return [
        'account' => $faker->ean8,
        'nickname' => $faker->name,
        'password' => md5('123456'),
        'telephone' => $faker->phoneNumber,
        'avatar' => '/uploads/1493787701504345403.png',
        'status' => rand(1, 2),
        'created_at' => $initialTime,
        'updated_at' => $initialTime
    ];
});
