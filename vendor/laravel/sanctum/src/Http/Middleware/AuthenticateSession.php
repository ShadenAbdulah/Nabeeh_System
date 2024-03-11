<?php

namespace Laravel\Sanctum\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateSession
{
    /**
     * The authentication factory implementation.
     *
     * @var AuthFactory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param AuthFactory $auth
     * @return void
     */
    public function __construct(AuthFactory $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     *
     * @throws AuthenticationException
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->hasSession() || ! $request->user()) {
            return $next($request);
        }

        $guards = Collection::make(Arr::wrap(config('sanctum.guard')))
            ->mapWithKeys(fn ($guard) => [$guard => $this->auth->guard($guard)])
            ->filter(fn ($guard) => $guard instanceof SessionGuard);

        $shouldLogout = $guards->filter(
            fn ($guard, $driver) => $request->session()->has('password_hash_'.$driver)
        )->filter(
            fn ($guard, $driver) => $request->session()->get('password_hash_'.$driver) !==
                                    $request->user()->getAuthPassword()
        );

        if ($shouldLogout->isNotEmpty()) {
            $shouldLogout->each->logoutCurrentDevice();

            $request->session()->flush();

            throw new AuthenticationException('Unauthenticated.', [...$shouldLogout->keys()->all(), 'sanctum']);
        }

        return tap($next($request), function () use ($request, $guards) {
            if (! is_null($request->user())) {
                $this->storePasswordHashInSession($request, $guards->keys()->first());
            }
        });
    }

    /**
     * Store the user's current password hash in the session.
     *
     * @param Request $request
     * @param  string  $guard
     * @return void
     */
    protected function storePasswordHashInSession($request, string $guard)
    {
        if (! $request->user()) {
            return;
        }

        $request->session()->put([
            "password_hash_{$guard}" => $request->user()->getAuthPassword(),
        ]);
    }
}
