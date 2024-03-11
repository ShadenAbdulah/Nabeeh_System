<?php

namespace Laravel\Fortify\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorQrCodeController extends Controller
{
    /**
     * Get the SVG element for the user's two factor authentication QR code.
     *
     * @param Request $request
     * @return Response
     */
    public function show(Request $request)
    {
        if (is_null($request->user()->two_factor_secret)) {
            return [];
        }

        return response()->json([
            'svg' => $request->user()->twoFactorQrCodeSvg(),
            'url' => $request->user()->twoFactorQrCodeUrl(),
        ]);
    }
}
