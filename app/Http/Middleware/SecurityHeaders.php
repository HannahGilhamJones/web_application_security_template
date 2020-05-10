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
        $response->header(
            'Content-Security-Policy',
            'default-src \'self\'; script-src \'self\'; connect-src \'self\'; style-src \'self\' https://fonts.googleapis.com/; img-src \'self\'; font-src \'self\' https://fonts.gstatic.com/s/nunito/v12/; object-src \'none\'; media-src \'none\'; worker-src \'none\'');

        return $response;
    }
}
