<?php
/*
 * @Author: Jadedever
 * @Date: 2022-02-08 23:52:58
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 16:15:15
 * @FilePath: /laravel9init/app/Providers/EventServiceProvider.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        \Illuminate\Database\Events\QueryExecuted::class => [
            \App\Listeners\QueryListener::class
        ],
        \Laravel\Passport\Events\AccessTokenCreated::class => [
            \App\Listeners\PassportAccessTokenCreated::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
