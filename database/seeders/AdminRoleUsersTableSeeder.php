<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRoleUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_users')->delete();
        
        \DB::table('admin_role_users')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-21 16:13:34',
            ),
            1 => 
            array (
                'role_id' => 2,
                'user_id' => 2,
                'created_at' => '2022-03-23 10:17:14',
                'updated_at' => '2022-03-23 10:17:14',
            ),
        ));
        
        
    }
}