<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            // id
            $table->increments('id');

            // 账户
            $table->string('account', 12);

            // 昵称
            $table->string('nickname', 16);

            // 角色
            $table->string('rolename');

            // 用户头像
            $table->string('avatar');

            // 密码
            $table->string('password', 32);

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
        Schema::drop('admins');
    }
}
