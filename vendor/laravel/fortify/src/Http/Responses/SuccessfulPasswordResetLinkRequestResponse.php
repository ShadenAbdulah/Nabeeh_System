<?php

namespace Laravel\Fortify\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse as SuccessfulPasswordResetLinkRequestResponseContract;
use Symfony\Component\HttpFoundation\Response;

class SuccessfulPasswordResetLinkRequestResponse implements SuccessfulPasswordResetLinkRequestResponseContract
{
    /**
     * The response status language key.
     *
     * @var string
     */
    protected $status;

    /**
     * Create a new response instance.
     *
     * @param  string  $status
     * @return void
     */
    public function __construct(string $status)
    {
        $this->status = $status;
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param  Request  $request
     * @return Response
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? new JsonResponse(['message' => trans($this->status)], 200)
                    : back()->with('status', trans($this->status));
    }
}
