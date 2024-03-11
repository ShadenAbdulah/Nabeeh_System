<?php

namespace Laravel\Fortify\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Contracts\EmailVerificationNotificationSentResponse;
use Laravel\Fortify\Fortify;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $request->wantsJson()
                        ? new JsonResponse('', 204)
                        : redirect()->intended(Fortify::redirects('email-verification'));
        }

        $request->user()->sendEmailVerificationNotification();

        return app(EmailVerificationNotificationSentResponse::class);
    }
}
