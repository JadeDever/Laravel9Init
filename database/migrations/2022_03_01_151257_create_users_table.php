<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:12:57
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 15:13:18
 * @FilePath: /laravel9init/database/migrations/2022_03_01_151257_create_users_table.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private const TABLE = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('account', 32)->comment('账号');
            $table->string('password')->comment('密码');
            $table->string('register_address')->comment('注册地址');
            $table->string('last_location')->default('')->comment('最后登录位置');
            $table->unsignedInteger('last_ip')->comment('最后登录IP');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE ' . self::TABLE . ' COMMENT "用户表"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE);
    }
};
