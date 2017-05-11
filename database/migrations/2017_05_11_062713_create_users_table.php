<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // id
            $table->increments('id');

            // 账户
            $table->string('account', 16);

            // 密码
            $table->string('password', 60);

            // 昵称
            $table->string('nickname', 16);

            // 头像
            $table->string('avatar');

            // 联系方式
            $table->string('telephone');

            // 账号状态
            // 0: 已删除
            // 1: 正常
            // 2: 禁用
            $table->integer('status');

            // 时间戳
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
