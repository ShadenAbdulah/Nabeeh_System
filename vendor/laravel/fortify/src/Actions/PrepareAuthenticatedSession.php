<?php

namespace Laravel\Fortify\Actions;

use Illuminate\Http\Request;
use Laravel\Fortify\LoginRateLimiter;

class PrepareAuthenticatedSession
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
        if ($request->hasSession()) {
            $request->session()->regenerate();
        }

        $this->limiter->clear($request);

        return $next($request);
    }
}
