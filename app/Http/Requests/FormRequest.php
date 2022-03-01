<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:38:27
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 15:41:23
 * @FilePath: /laravel9init/app/Http/Requests/FormRequest.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseRequest;

class FormRequest extends BaseRequest
{
    use SceneValidator;

    public function authorize()
    {
        return true;
    }
}
