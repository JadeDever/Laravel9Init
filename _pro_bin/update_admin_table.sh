#!/bin/bash

php artisan db:seed --class=AdminMenuTableSeeder
php artisan db:seed --class=AdminRolesTableSeeder
php artisan db:seed --class=AdminPermissionsTableSeeder

php artisan db:seed --class=AdminPermissionMenuTableSeeder
php artisan db:seed --class=AdminRoleMenuTableSeeder
php artisan db:seed --class=AdminRolePermissionsTableSeeder
