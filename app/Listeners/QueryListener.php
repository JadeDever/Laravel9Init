<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:51:24
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 15:51:37
 * @FilePath: /laravel9init/app/Listeners/QueryListener.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Listeners;

use Illuminate\Database\Events\QueryExecuted;

class QueryListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  QueryExecuted  $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {
        if (true === config('app.debug')) {
            foreach ($event->bindings as $key => $value) {
                if ($value instanceof \DateTimeInterface) {
                    $event->bindings[$key] = $value->format('Y-m-d H:i:s');
                } elseif (is_bool($value)) {
                    $event->bindings[$key] = (int)$value;
                }
            }

            $sql = str_replace('?', "'%s'", $event->sql);
            logger("[{$event->time}ms] " . vsprintf($sql, $event->bindings));
        }
    }
}
