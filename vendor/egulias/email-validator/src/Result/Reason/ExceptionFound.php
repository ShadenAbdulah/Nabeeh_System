<?php

namespace Egulias\EmailValidator\Result\Reason;

use Exception;

class ExceptionFound implements Reason
{
    /**
     * @var Exception
     */
    private $exception;

    public function __construct(Exception $exception)
    {
        $this->exception = $exception;

    }
    public function code() : int
    {
        return 999;
    }

    public function description() : string
    {
        return $this->exception->getMessage();
    }
}
