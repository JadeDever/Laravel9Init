<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 16:09:19
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 18:30:53
 * @FilePath: /laravel9init/app/Jobs/User/UserLocation.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Jobs\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\{InteractsWithQueue, SerializesModels};
use App\Libraries\TencentMapLibrary;
use Illuminate\Support\Facades\DB;
use App\Models\User\User;

class UserLocation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    protected $wasRecentlyCreated;

    public function __construct(User $user, bool $wasRecentlyCreated)
    {
        $this->user = $user;
        $this->wasRecentlyCreated = $wasRecentlyCreated;
    }

    public function handle()
    {
        $location = TencentMapLibrary::getLocationByIp($this->user->last_ip);
        if (!empty($location)) {
            $data = ['last_location' => $location];
            $this->wasRecentlyCreated && ($data['register_address'] = $data['last_location']);
            DB::table('users')->where('id', $this->user->id)->update($data);
        }
    }
}
