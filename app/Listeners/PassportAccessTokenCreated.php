<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 16:17:07
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 16:17:17
 * @FilePath: /laravel9init/app/Listeners/PassportAccessTokenCreated.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Listeners;

use Laravel\Passport\Events\AccessTokenCreated;
use Laravel\Passport\Token;

class PassportAccessTokenCreated
{
    public function handle(AccessTokenCreated $event)
    {
        Token::query()
            ->where('id', '<>', $event->tokenId)
            ->where('user_id', $event->userId)
            ->where('client_id', $event->clientId)
            ->where('revoked', 0)
            ->where('expires_at', '<=', now()->toDateTimeString())
            ->delete();
    }
}
