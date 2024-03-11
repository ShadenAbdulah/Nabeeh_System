<?php

namespace Laravel\Fortify\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class CanonicalizeUsername
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        $request->merge([
            Fortify::username() => Str::lower($request->{Fortify::username()}),
        ]);

        return $next($request);
    }
}
