<?php

namespace Illuminate\Queue\Events;

use Illuminate\Contracts\Queue\Job;

class JobPopped
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
     * @var Job|null
     */
    public $job;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  Job|null  $job
     * @return void
     */
    public function __construct($connectionName, $job)
    {
        $this->connectionName = $connectionName;
        $this->job = $job;
    }
}
