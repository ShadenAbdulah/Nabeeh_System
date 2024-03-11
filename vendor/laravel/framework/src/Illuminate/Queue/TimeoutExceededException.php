<?php

namespace Illuminate\Queue;

use Illuminate\Contracts\Queue\Job;

class TimeoutExceededException extends MaxAttemptsExceededException
{
    /**
     * Create a new instance for the job.
     *
     * @param  Job  $job
     * @return static
     */
    public static function forJob($job)
    {
        return tap(new static($job->resolveName().' has timed out.'), function ($e) use ($job) {
            $e->job = $job;
        });
    }
}
