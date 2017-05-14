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
            'name' => '图书教材',
        ]);

        DB::table('good_types')->insert([
            'name' => '数码配件',
        ]);

        DB::table('good_types')->insert([
            'name' => '化妆品',
        ]);

        DB::table('good_types')->insert([
            'name' => '数码',
        ]);

        DB::table('good_types')->insert([
            'name' => '手机',
        ]);

        DB::table('good_types')->insert([
            'name' => '电脑',
        ]);

        DB::table('good_types')->insert([
            'name' => '生活娱乐',
        ]);

        DB::table('good_types')->insert([
            'name' => '校园代步',
        ]);

        DB::table('good_types')->insert([
            'name' => '衣物伞帽',
        ]);
    }
}
