<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:59:21
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 16:34:56
 * @FilePath: /laravel9init/app/Models/ModelTrait.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Models;

trait ModelTrait
{
    protected function modelFilter()
    {
        return config('eloquentfilter.namespace', 'App\\ModelFilters\\')
            . str_replace(__NAMESPACE__ . '\\', '', get_class($this)) . 'Filter';
    }

}
