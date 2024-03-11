<?php

namespace Laravel\Fortify\Actions;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LockoutResponse;
use Laravel\Fortify\LoginRateLimiter;

class EnsureLoginIsNotThrottled
{
    /**
     * The login rate limiter instance.
     *
     * @var LoginRateLimiter
     */
    protected $limiter;

    /**
     * Create a new class instance.
     *
     * @param LoginRateLimiter $limiter
     * @return void
     */
    public function __construct(LoginRateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        if (! $this->limiter->tooManyAttempts($request)) {
            return $next($request);
        }

        event(new Lockout($request));

        return app(LockoutResponse::class);
    }
}
