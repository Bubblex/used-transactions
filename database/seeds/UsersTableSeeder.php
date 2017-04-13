<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'account' => 'user_001',
            'password' => md5('123456'),
            'nickname' => '用户_001',
            'avatar' => '/uploads/1493787701504345403.png'
        ]);
    }
}
