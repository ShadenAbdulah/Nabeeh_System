<?php

namespace Laravel\Fortify\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Contracts\FailedTwoFactorLoginResponse;
use Laravel\Fortify\Contracts\TwoFactorChallengeViewResponse;
use Laravel\Fortify\Contracts\TwoFactorLoginResponse;
use Laravel\Fortify\Events\RecoveryCodeReplaced;
use Laravel\Fortify\Http\Requests\TwoFactorLoginRequest;

class TwoFactorAuthenticatedSessionController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param StatefulGuard $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Show the two factor authentication challenge view.
     *
     * @param TwoFactorLoginRequest $request
     * @return TwoFactorChallengeViewResponse
     */
    public function create(TwoFactorLoginRequest $request): TwoFactorChallengeViewResponse
    {
        if (! $request->hasChallengedUser()) {
            throw new HttpResponseException(redirect()->route('login'));
        }

        return app(TwoFactorChallengeViewResponse::class);
    }

    /**
     * Attempt to authenticate a new session using the two factor authentication code.
     *
     * @param TwoFactorLoginRequest $request
     * @return mixed
     */
    public function store(TwoFactorLoginRequest $request)
    {
        $user = $request->challengedUser();

        if ($code = $request->validRecoveryCode()) {
            $user->replaceRecoveryCode($code);

            event(new RecoveryCodeReplaced($user, $code));
        } elseif (! $request->hasValidCode()) {
            return app(FailedTwoFactorLoginResponse::class)->toResponse($request);
        }

        $this->guard->login($user, $request->remember());

        $request->session()->regenerate();

        return app(TwoFactorLoginResponse::class);
    }
}
