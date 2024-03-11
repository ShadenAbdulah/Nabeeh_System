<?php

namespace Illuminate\Process\Exceptions;

use Illuminate\Contracts\Process\ProcessResult;
use Symfony\Component\Process\Exception\ProcessTimedOutException as SymfonyTimeoutException;
use Symfony\Component\Process\Exception\RuntimeException;

class ProcessTimedOutException extends RuntimeException
{
    /**
     * The process result instance.
     *
     * @var ProcessResult
     */
    public $result;

    /**
     * Create a new exception instance.
     *
     * @param SymfonyTimeoutException $original
     * @param ProcessResult $result
     * @return void
     */
    public function __construct(SymfonyTimeoutException $original, ProcessResult $result)
    {
        $this->result = $result;

        parent::__construct($original->getMessage(), $original->getCode(), $original);
    }
}
