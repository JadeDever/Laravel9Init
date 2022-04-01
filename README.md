
## 关于

## 环境

PHP >= 8.0
Laravel >=9.0
Redis >=6.0

### 一、Mac 下通过 Sail 启动项目

> 先生成配置

```
cp .env.example .env

# 配置以下关键参数
APP_NAME='laravel9init'
APP_ENV=production
APP_DEBUG=false
APP_URL='http://localhost'
APP_FRONT_URL='http://localhost'
PAGINATION_LIMIT_DEFAULT=15

```

> 若本地有 composer 及 PHP 环境，并安装好了 docker

```
composer install  # 安装依赖

```

> 若本地没有 composer 及 PHP 环境，直接执行

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

```


> 开启权限

```
chmod -R 777 storage/
```

> 生成 Key

```
sail artisan key:generate
```

> 执行数据库迁移并填充默认数据

```
sail artisan migrate --seed
```

> 生成接口加密秘钥

```
sail artisan passport:keys
```

> 生成软链接

```
sail artisan storage:link
```

> 访问管理后台
> [http://localhost/admin](http://localhost/admin)

> 初始账号密码

| 账号        | 密码     |
| :---------- | :------- |
| super_admin | 11223344 |
| admin       | 11223344 |

> 访问测试接口测试
> [http://localhost/api/v1/test](http://localhost/api/v1/test)

### 二、通过 Laradock 启动项目

```

```

## 插件一览

| 名称                                                                                  | 说明                                                                                                                                                                                                                                |
| :------------------------------------------------------------------------------------ | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [dcat/laravel-admin](https://learnku.com/docs/dcat-admin/2.x/brief-introduction/8080) | 是一个基于 laravel-admin 二次开发而成的后台系统构建工具，只需很少的代码即可快速构建出一个功能完善的高颜值后台系统。支持页面一键生成 CURD 代码，内置丰富的后台常用组件，开箱即用，让开发者告别冗杂的 HTML 代码，对后端开发者非常友好 |
| [fruitcake/laravel-cors](https://github.com/fruitcake/laravel-cors)                   | CORS Middleware for Laravel                                                                                                                                                                                                         |
| [laravel/octane](https://learnku.com/docs/laravel/9.x/octane/12269)                   | 通过使用高性能应用程序服务器为您的应用程序提供服务来增强您的应用程序的性能，包括 Open Swoole，Swoole，和 RoadRunner。Octane 启动您的应用程序一次，将其保存在内存中，然后以极快的速度向它提供请求。                                  |
| [laravel/passport](https://learnku.com/docs/laravel/9.x/passport/12270)               | 可以在几分钟之内为你的应用程序提供完整的 OAuth2 服务端实现                                                                                                                                                                          |
| [laravel/tinker]()                                                                    |                                                                                                                                                                                                                                     |
| [overtrue/laravel-lang](https://github.com/overtrue/laravel-lang)                     |                                                                                                                                                                                                                                     |
| [overtrue/laravel-passport-cache-token]()                                             |                                                                                                                                                                                                                                     |
| [spatie/laravel-activitylog]()                                                        |                                                                                                                                                                                                                                     |
| [spatie/laravel-backup]()                                                             |                                                                                                                                                                                                                                     |
| [w7corp/easywechat]()                                                                 |                                                                                                                                                                                                                                     |
| [tucker-eric/eloquentfilter](https://github.com/Tucker-Eric/EloquentFilter)           |                                                                                                                                                                                                                                     |

开发插件
| 名称 | 说明 |
| :--------------------------- | :--- |
| [barryvdh/laravel-debugbar]() | |
| [barryvdh/laravel-ide-helper]() | |
| [fakerphp/faker]() | |
| [laravel/sail](https://learnku.com/docs/laravel/9.x/sail/12271#8d04a6) |轻量级的命令行界面，用于与 Laravel 的默认 Docker 开发环境进行交互 |
| [laravel/telescope](https://learnku.com/docs/laravel/9.x/telescope/12275) | Telescope 可以洞察你的应用程序的请求、异常、日志条目、数据库查询、排队的作业、邮件、消息通知、缓存操作、定时计划任务、变量打印等|
| [mockery/mockery]() | |
| [nunomaduro/collision]() | |
| [orangehill/iseed]() | |
| [phpunit/phpunit]() | |
| [spatie/laravel-ignition]() | |

## 关于跨域配置

> 当为开发模式是，全域可访问，正式时仅前端域能访问

```
'allowed_origins' =>env('APP_DEBUG')? ['*']:[env('APP_FRONT_URL','*')],
```
