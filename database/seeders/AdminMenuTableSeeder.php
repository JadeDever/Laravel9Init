<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '首页',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:18:59',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => '系统管理',
                'icon' => 'feather icon-settings',
                'uri' => NULL,
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:19:14',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => '管理用户',
                'icon' => NULL,
                'uri' => 'auth/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:20:42',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => '角色',
                'icon' => NULL,
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:21:09',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => '权限',
                'icon' => NULL,
                'uri' => 'auth/permissions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:21:04',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => '菜单',
                'icon' => NULL,
                'uri' => 'auth/menu',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:21:15',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => '扩展',
                'icon' => NULL,
                'uri' => 'auth/extensions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2022-03-21 16:13:34',
                'updated_at' => '2022-03-23 10:21:24',
            ),
        ));
        
        
    }
}