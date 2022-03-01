<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 15:10:29
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 15:10:46
 * @FilePath: /laravel9init/app/Http/Middleware/AcceptHeader.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AcceptHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}
