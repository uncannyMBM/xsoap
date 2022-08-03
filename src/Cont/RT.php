<?php

namespace XContains\XContains\Cont;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use XContains\XContains\Draug\MD;

class RT extends ServiceProvider
{
    public function register()
    {
        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', MD::class);
    }
}
