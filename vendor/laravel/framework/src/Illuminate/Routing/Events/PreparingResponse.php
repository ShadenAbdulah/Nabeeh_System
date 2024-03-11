<?php

namespace Illuminate\Routing\Events;

use Symfony\Component\HttpFoundation\Request;

class PreparingResponse
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
     * @var mixed
     */
    public $response;

    /**
     * Create a new event instance.
     *
     * @param  Request  $request
     * @param  mixed  $response
     * @return void
     */
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
