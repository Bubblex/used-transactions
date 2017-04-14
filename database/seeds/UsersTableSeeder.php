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
                'status' => rand(1, 2),
                'avatar' => '/uploads/1493787701504345403.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        //
        DB::table('users')->insert($users);
    }
}
