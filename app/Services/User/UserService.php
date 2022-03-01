<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:54:09
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 18:19:22
 * @FilePath: /laravel9init/app/Services/User/UserService.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Services\User;

use \Exception;
use App\Models\User\User;

class UserService
{
    /**
     * @param array     $params
     *
     * @return User
     * @throws Exception
     */
    public function createUser(array $params)
    {
        $userData = [
            'account' => $params['account'],
            'password' => bcrypt($params['password']),
            'register_address' => '',
            'last_ip' => request()->ip(),
        ];
        return User::create($userData);
    }
}
