<?php

namespace BasicStructeMod\Middleware;

use Illuminate\Support\Facades\App;

class BasicMiddleware
{
    /**
     * @param $request
     * @param \Closure $next
     * @return array|mixed
     */
    public function handle($request, \Closure $next)
    {
        if ( $request->isJson() ) {
            return $next($request);
        }
        return ['error'=>'erro'];
    }
}