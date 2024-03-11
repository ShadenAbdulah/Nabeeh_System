<?php

namespace Laravel\Fortify\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Laravel\Fortify\Contracts\TwoFactorDisabledResponse;
use Laravel\Fortify\Contracts\TwoFactorEnabledResponse;

class TwoFactorAuthenticationController extends Controller
{
    /**
     * Enable two factor authentication for the user.
     *
     * @param Request $request
     * @param EnableTwoFactorAuthentication $enable
     * @return TwoFactorEnabledResponse
     */
    public function store(Request $request, EnableTwoFactorAuthentication $enable)
    {
        $enable($request->user(), $request->boolean('force', false));

        return app(TwoFactorEnabledResponse::class);
    }

    /**
     * Disable two factor authentication for the user.
     *
     * @param Request $request
     * @param DisableTwoFactorAuthentication $disable
     * @return TwoFactorDisabledResponse
     */
    public function destroy(Request $request, DisableTwoFactorAuthentication $disable)
    {
        $disable($request->user());

        return app(TwoFactorDisabledResponse::class);
    }
}
