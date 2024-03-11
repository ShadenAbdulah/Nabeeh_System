<?php

namespace Laravel\Fortify\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Actions\ConfirmTwoFactorAuthentication;
use Laravel\Fortify\Contracts\TwoFactorConfirmedResponse;

class ConfirmedTwoFactorAuthenticationController extends Controller
{
    /**
     * Enable two factor authentication for the user.
     *
     * @param Request $request
     * @param ConfirmTwoFactorAuthentication $confirm
     * @return TwoFactorConfirmedResponse
     */
    public function store(Request $request, ConfirmTwoFactorAuthentication $confirm)
    {
        $confirm($request->user(), $request->input('code'));

        return app(TwoFactorConfirmedResponse::class);
    }
}
