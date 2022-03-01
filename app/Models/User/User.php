<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:04:29
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 17:28:24
 * @FilePath: /laravel9init/app/Models/User/User.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Models\User;

use EloquentFilter\Filterable;

use App\Models\ModelTrait;
use App\Observers\User\UserObserver;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * App\Models\User\User
 *
 * @property int $id
 * @property string $account 账号
 * @property string $password 密码
 * @property string $register_address 注册地址
 * @property string $last_location 最后登录位置
 * @property int $last_ip 最后登录IP
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User filter(array $input = [], $filter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User paginateFilter($perPage = null, $columns = [], $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User simplePaginateFilter($perPage = null, $columns = [], $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBeginsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEndsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLike($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegisterAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Filterable, ModelTrait,HasApiTokens;

    protected $guarded = [];


    public static function findByAccount(string $account)
    {
        return static::query()
            ->where('account', $account)
            ->first();
    }

    public function setLastIpAttribute($value)
    {
        $this->attributes['last_ip'] = ip2long($value);
    }

    public function getLastIpAttribute($value)
    {
        return long2ip($value);
    }

    public static function boot()
    {
        parent::boot();
        static::observe(UserObserver::class);
    }
}
