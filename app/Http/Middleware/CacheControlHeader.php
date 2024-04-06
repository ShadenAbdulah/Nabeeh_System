<?php

namespace App\Http\Middleware;

use Closure;

class CacheControlHeader
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-cache, must-revalidate, max-age=300, no-store, private', false);
        return $response;
    }
}

