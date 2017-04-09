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
            'created_at' => 
        ]);
    }
}
