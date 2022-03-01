<?php

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
