<?php

namespace Laravel\Fortify\Http\Responses;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\FailedPasswordResetResponse as FailedPasswordResetResponseContract;
use Symfony\Component\HttpFoundation\Response;

class FailedPasswordResetResponse implements FailedPasswordResetResponseContract
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
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'email' => [trans($this->status)],
            ]);
        }

        return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($this->status)]);
    }
}
