<?php

namespace App\Observers\User;

use App\Jobs\User\UserLocation;
use App\Models\User\User;

class UserObserver
{
    public function saved(User $user)
    {
        $user->setAttribute('token', $user->createToken($user->id)->accessToken);

        rescue(function () use ($user) {
            $wasRecentlyCreated = $user->wasRecentlyCreated;
            if ($wasRecentlyCreated || $user->wasChanged('last_ip')) {
                dispatch(new UserLocation($user, $wasRecentlyCreated));
            }
        });
    }
}
