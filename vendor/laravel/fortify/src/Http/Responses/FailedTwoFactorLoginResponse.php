<?php

namespace Laravel\Fortify\Http\Responses;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\FailedTwoFactorLoginResponse as FailedTwoFactorLoginResponseContract;
use Symfony\Component\HttpFoundation\Response;

class FailedTwoFactorLoginResponse implements FailedTwoFactorLoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  Request  $request
     * @return Response
     */
    public function toResponse($request)
    {
        [$key, $message] = $request->filled('recovery_code')
            ? ['recovery_code', __('The provided two factor recovery code was invalid.')]
            : ['code', __('The provided two factor authentication code was invalid.')];

        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                $key => [$message],
            ]);
        }

        return redirect()->route('two-factor.login')->withErrors([$key => $message]);
    }
}
