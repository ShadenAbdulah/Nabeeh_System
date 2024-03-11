<?php

namespace Illuminate\Contracts\Debug;

use Illuminate\Http\Request;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

interface ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param Throwable $e
     * @return void
     *
     * @throws Throwable
     */
    public function report(Throwable $e);

    /**
     * Determine if the exception should be reported.
     *
     * @param Throwable $e
     * @return bool
     */
    public function shouldReport(Throwable $e);

    /**
     * Render an exception into an HTTP response.
     *
     * @param  Request  $request
     * @param Throwable $e
     * @return Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $e);

    /**
     * Render an exception to the console.
     *
     * @param  OutputInterface  $output
     * @param Throwable $e
     * @return void
     *
     * @internal This method is not meant to be used or overwritten outside the framework.
     */
    public function renderForConsole($output, Throwable $e);
}
