<?php

namespace Illuminate\Console\Events;

use Illuminate\Console\Scheduling\Event;

class ScheduledTaskStarting
{
    /**
     * The scheduled event being run.
     *
     * @var Event
     */
    public $task;

    /**
     * Create a new event instance.
     *
     * @param Event $task
     * @return void
     */
    public function __construct(Event $task)
    {
        $this->task = $task;
    }
}
