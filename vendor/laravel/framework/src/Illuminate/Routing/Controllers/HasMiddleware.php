<?php

namespace Illuminate\Routing\Controllers;

interface HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     *
     * @return Middleware|array
     */
    public static function middleware();
}
