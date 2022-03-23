#!/bin/bash
###
 # @Author: Jadedever
 # @Date: 2022-01-17 15:09:31
 # @LastEditors: Jadedever
 # @LastEditTime: 2022-03-23 10:41:58
 # @FilePath: /laravel9init/_dev_bin/iseed_admin_db.sh
 # @Description: ./_dev_bin/iseed_admin_db.sh
 # 前提条件安装了：orangehill/iseed 插件：地址为：https://github.com/orangehill/iseed
 # Copyright (c) 2022 by Jadedever, All Rights Reserved.
###

# 生成管理端数据表的 seed 文件
php artisan iseed admin_menu,admin_permissions,admin_role_menu,admin_role_permissions,admin_roles,admin_permission_menu --force

# 跟用户相关的角色、权限表慎重配置
php artisan iseed admin_users,admin_role_users
