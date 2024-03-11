<?php

namespace Laravel\Fortify\Http\Responses;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\FailedPasswordConfirmationResponse as FailedPasswordConfirmationResponseContract;
use Symfony\Component\HttpFoundation\Response;

class FailedPasswordConfirmationResponse implements FailedPasswordConfirmationResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  Request  $request
     * @return Response
     */
    public function toResponse($request)
    {
        $message = __('The provided password was incorrect.');

        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'password' => [$message],
            ]);
        }

        return back()->withErrors(['password' => $message]);
    }
}
