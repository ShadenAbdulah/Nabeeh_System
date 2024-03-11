<?php

namespace Laravel\Fortify\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Actions\GenerateNewRecoveryCodes;
use Laravel\Fortify\Contracts\RecoveryCodesGeneratedResponse;

class RecoveryCodeController extends Controller
{
    /**
     * Get the two factor authentication recovery codes for authenticated user.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (! $request->user()->two_factor_secret ||
            ! $request->user()->two_factor_recovery_codes) {
            return [];
        }

        return response()->json(json_decode(decrypt(
            $request->user()->two_factor_recovery_codes
        ), true));
    }

    /**
     * Generate a fresh set of two factor authentication recovery codes.
     *
     * @param Request $request
     * @param GenerateNewRecoveryCodes $generate
     * @return RecoveryCodesGeneratedResponse
     */
    public function store(Request $request, GenerateNewRecoveryCodes $generate)
    {
        $generate($request->user());

        return app(RecoveryCodesGeneratedResponse::class);
    }
}
