<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRoleMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_menu')->delete();
        
        \DB::table('admin_role_menu')->insert(array (
            0 => 
            array (
                'role_id' => 2,
                'menu_id' => 1,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            1 => 
            array (
                'role_id' => 2,
                'menu_id' => 2,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            2 => 
            array (
                'role_id' => 2,
                'menu_id' => 3,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            3 => 
            array (
                'role_id' => 2,
                'menu_id' => 4,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            4 => 
            array (
                'role_id' => 2,
                'menu_id' => 5,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            5 => 
            array (
                'role_id' => 2,
                'menu_id' => 6,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
        ));
        
        
    }
}