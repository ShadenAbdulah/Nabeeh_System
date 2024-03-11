<?php

namespace Illuminate\Broadcasting;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Broadcast;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class BroadcastController extends Controller
{
    /**
     * Authenticate the request for channel access.
     *
     * @param Request $request
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if ($request->hasSession()) {
            $request->session()->reflash();
        }

        return Broadcast::auth($request);
    }

    /**
     * Authenticate the current user.
     *
     * See: https://pusher.com/docs/channels/server_api/authenticating-users/#user-authentication.
     *
     * @param Request $request
     * @return Response
     */
    public function authenticateUser(Request $request)
    {
        if ($request->hasSession()) {
            $request->session()->reflash();
        }

        return Broadcast::resolveAuthenticatedUser($request)
                    ?? throw new AccessDeniedHttpException;
    }
}
