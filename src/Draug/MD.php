<?php

namespace XContains\XContains\Draug;

use Closure;
use Facades\XContains\XContains\Ars\Ai;

class MD
{
    public function handle($request, Closure $next)
    {
      Ai::getData();
      return $next($request);
    }
}
