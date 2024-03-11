<?php

namespace Illuminate\Queue\Events;

use Illuminate\Contracts\Queue\Job;
use Throwable;

class JobFailed
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The job instance.
     *
     * @var Job
     */
    public $job;

    /**
     * The exception that caused the job to fail.
     *
     * @var Throwable
     */
    public $exception;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  Job  $job
     * @param  Throwable  $exception
     * @return void
     */
    public function __construct($connectionName, $job, $exception)
    {
        $this->job = $job;
        $this->exception = $exception;
        $this->connectionName = $connectionName;
    }
}
