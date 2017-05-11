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
use App\Models\Good;

$factory->define(Good::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    $initialTime = date('Y-m-d H:i:s', $faker->unixTime($max = 'now'));

    return [
        'user_id' => rand(1, 50),
        'goods_type_id' => rand(1, 3),
        'name' => $faker->name,
        'summary' => $faker->word,
        'price' => $faker->randomFloat,
        'concat_telephone' => $faker->phoneNumber,
        'concat_name' => $faker->name,
        'detail' => $faker->text,
        'specification' => $faker->text,
        'use_situation' => $faker->text,
        'image' => '/uploads/1493787701504345403.png',
        'created_at' => $initialTime,
        'updated_at' => $initialTime
    ];
});

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
