
<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:25:57
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 16:19:45
 * @FilePath: /laravel9init/routes/api/user.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

Route::prefix('user')
    ->namespace('User')
    ->name('user.')
    ->group(function () {
        Route::post('register', 'UserController@register')->name('user.register');
        Route::middleware('auth:api')->group(function () {
            Route::get('mock', 'UserController@mock')->name('user.mock');
        });
    });
