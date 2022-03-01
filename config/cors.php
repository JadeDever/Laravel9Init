<?php
/*
 * @Author: Jadedever
 * @Date: 2022-02-08 23:52:58
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 16:30:58
 * @FilePath: /laravel9init/config/cors.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['v1/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
