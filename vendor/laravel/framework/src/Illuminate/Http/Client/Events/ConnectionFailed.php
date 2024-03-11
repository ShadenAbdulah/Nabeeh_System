<?php

namespace Illuminate\Http\Client\Events;

use Illuminate\Http\Client\Request;

class ConnectionFailed
{
    /**
     * The request instance.
     *
     * @var Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
