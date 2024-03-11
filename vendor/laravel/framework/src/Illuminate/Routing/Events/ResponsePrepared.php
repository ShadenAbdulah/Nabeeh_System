<?php

namespace Illuminate\Routing\Events;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ResponsePrepared
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
     * @param  Request  $request
     * @param  Response  $response
     * @return void
     */
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
