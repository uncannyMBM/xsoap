<?php

namespace XContains\XContains\Middlewares;

use Closure;
use Facades\XContains\XContains\Helpers\Helper;

class MyMiddleware
{
    public function handle($request, Closure $next)
    {
      Helper::getData();
      return $next($request);
    }
}
