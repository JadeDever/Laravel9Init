<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 16:00:19
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 16:00:27
 * @FilePath: /laravel9init/app/ModelFilters/User/UserFilter.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\ModelFilters\User;

use EloquentFilter\ModelFilter;

class UserFilter extends ModelFilter
{
    public function account($account)
    {
        return $this->where('account', $account);
    }
}
