<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:41:56
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 15:42:17
 * @FilePath: /laravel9init/app/Http/Requests/User/UserRequest.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Http\Requests\User;

use App\Http\Requests\FormRequest;

class UserRequest extends FormRequest
{
    protected $autoValidate = false;

    public function rules()
    {
        return [
            'account' => 'required|string',
            'password' => 'required|string|min:6',
        ];
    }

    public function scene()
    {
        return [
            'register' => [
                'account',
                'password',
            ],
        ];
    }
}
