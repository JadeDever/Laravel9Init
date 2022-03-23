<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_permissions')->delete();
        
        \DB::table('admin_role_permissions')->insert(array (
            0 => 
            array (
                'role_id' => 2,
                'permission_id' => 2,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            1 => 
            array (
                'role_id' => 2,
                'permission_id' => 3,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            2 => 
            array (
                'role_id' => 2,
                'permission_id' => 4,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            3 => 
            array (
                'role_id' => 2,
                'permission_id' => 5,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
            4 => 
            array (
                'role_id' => 2,
                'permission_id' => 6,
                'created_at' => '2022-03-23 10:15:38',
                'updated_at' => '2022-03-23 10:15:38',
            ),
        ));
        
        
    }
}