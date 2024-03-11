<?php

namespace Illuminate\Routing\Events;

use Illuminate\Http\Request;

class Routing
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
     * @param  Request  $request
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }
}
