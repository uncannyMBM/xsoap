<?php

namespace XContains\XContains\Cont;

use Illuminate\Support\ServiceProvider;
use Facades\XContains\XContains\Cri\AL;

class AP extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Asp/CN.php', 'connection'
        );
    }

    public function boot()
    {
        AL::bo();
    }
}
