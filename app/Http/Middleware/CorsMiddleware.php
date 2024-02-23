<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Set CORS headers
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS');
        $response->header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');

        return $response;
    }
}
