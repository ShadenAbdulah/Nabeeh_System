<?php

namespace Laravel\Sanctum\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Sanctum\Exceptions\MissingAbilityException;

class CheckAbilities
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @param  mixed  ...$abilities
     * @return Response
     *
     * @throws AuthenticationException|MissingAbilityException
     */
    public function handle($request, $next, ...$abilities)
    {
        if (! $request->user() || ! $request->user()->currentAccessToken()) {
            throw new AuthenticationException;
        }

        foreach ($abilities as $ability) {
            if (! $request->user()->tokenCan($ability)) {
                throw new MissingAbilityException($ability);
            }
        }

        return $next($request);
    }
}
