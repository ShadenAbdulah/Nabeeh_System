<?php

namespace Illuminate\View;

use ErrorException;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Reflector;

class ViewException extends ErrorException
{
    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        $exception = $this->getPrevious();

        if (Reflector::isCallable($reportCallable = [$exception, 'report'])) {
            return Container::getInstance()->call($reportCallable);
        }

        return false;
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  Request  $request
     * @return Response|null
     */
    public function render($request)
    {
        $exception = $this->getPrevious();

        if ($exception && method_exists($exception, 'render')) {
            return $exception->render($request);
        }
    }
}
