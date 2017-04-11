<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'account' => 'admin',
            'password' => md5('123456'),
            'rolename' => '超级管理员',
            'nickname' => 'Jarvis',
            'avatar' => '/uploads/1493787701504345403.png'
        ]);
    }
}
