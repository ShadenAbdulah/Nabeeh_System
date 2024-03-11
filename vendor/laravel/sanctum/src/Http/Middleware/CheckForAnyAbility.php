<?php

namespace Laravel\Sanctum\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Sanctum\Exceptions\MissingAbilityException;

class CheckForAnyAbility
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
            if ($request->user()->tokenCan($ability)) {
                return $next($request);
            }
        }

        throw new MissingAbilityException($abilities);
    }
}
