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
        $users = [];

        for ($i = 1; $i <= 100; $i++) {
            $users[] = [
                'account' => 'user_'.$i,
                'password' => md5('123456'),
                'nickname' => '用户_'.$i,
                'avatar' => '/uploads/1493787701504345403.png'
            ];
        }
        //
        DB::table('users')->insert($users);
    }
}
