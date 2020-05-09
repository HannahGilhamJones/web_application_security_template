<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeaders
{
    /**
     * Take an incoming request and apply security headers
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) 
    {
        $response = $next($request);
        $response->header('Upgrade-Insecure-Requests', '1');

        return $response;
    }
}
