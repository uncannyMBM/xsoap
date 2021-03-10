<?php

namespace XContains\XContains\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use XContains\XContains\Middlewares\MyMiddleware;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', MyMiddleware::class);
    }


    public function boot()
    {

    }
}
