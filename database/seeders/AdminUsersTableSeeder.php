<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'super_admin',
                'password' => '$2y$10$3VX3fChiJh.kqt3fR8BClOTayGMQ38.QQdYgpB/JD.hkgK2sJFxEq',
                'name' => '超级管理员',
                'avatar' => NULL,
                'remember_token' => 'O8ngvun1VQMoaakpDXq5Vw4P872w71SnY9b8j3RpzksCyqGfAO4UwdfFycYv',
                'created_at' => '2022-03-23 09:36:00',
                'updated_at' => '2022-03-23 10:17:48',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'admin',
                'password' => '$2y$10$02PgxnkmdkT0DxdyUT119uN4MvgTibSneBRtGO67q/8vEGlBq8Bsq',
                'name' => '管理员',
                'avatar' => NULL,
                'remember_token' => '7etzsjxx2FWuCZdbUMFGiklVJNrInlDVDSj1FoxNS2t7YKURptnOMzGfi3zR',
                'created_at' => '2022-03-23 10:17:14',
                'updated_at' => '2022-03-23 10:17:14',
            ),
        ));
        
        
    }
}