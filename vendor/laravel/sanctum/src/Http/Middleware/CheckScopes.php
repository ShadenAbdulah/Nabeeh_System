<?php

namespace Laravel\Sanctum\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Sanctum\Exceptions\MissingAbilityException;
use Laravel\Sanctum\Exceptions\MissingScopeException;

/**
 * @deprecated
 * @see CheckAbilities
 */
class CheckScopes
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @param  mixed  ...$scopes
     * @return Response
     *
     * @throws AuthenticationException|MissingScopeException
     */
    public function handle($request, $next, ...$scopes)
    {
        try {
            return (new CheckAbilities())->handle($request, $next, ...$scopes);
        } catch (MissingAbilityException $e) {
            throw new MissingScopeException($e->abilities());
        }
    }
}
