<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '超级管理员',
                'slug' => 'administrator',
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:14:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '管理员',
                'slug' => 'admin',
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '运营',
                'slug' => 'operator',
                'created_at' => '2022-03-23 10:16:07',
                'updated_at' => '2022-03-23 10:16:07',
            ),
        ));
        
        
    }
}