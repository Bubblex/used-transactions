<?php

use Illuminate\Database\Seeder;

class GoodTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('good_types')->insert([
            'name' => '电器',
        ]);

        DB::table('good_types')->insert([
            'name' => '手机',
        ]);

        DB::table('good_types')->insert([
            'name' => '电脑',
        ]);
    }
}
