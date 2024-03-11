<?php

namespace Illuminate\Http\Client\Events;

use Illuminate\Http\Client\Request;
use Illuminate\Http\Client\Response;

class ResponseReceived
{
    /**
     * The request instance.
     *
     * @var Request
     */
    public $request;

    /**
     * The response instance.
     *
     * @var Response
     */
    public $response;

    /**
     * Create a new event instance.
     *
     * @param Request $request
     * @param Response $response
     * @return void
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
