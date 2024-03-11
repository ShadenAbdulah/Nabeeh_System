<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        app()->setLocale('ar'); // Set the locale to Arabic

        return $next($request);
    }
}
