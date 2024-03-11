<?php

namespace Illuminate\Bus\Events;

use Illuminate\Bus\Batch;

class BatchDispatched
{
    /**
     * The batch instance.
     *
     * @var Batch
     */
    public $batch;

    /**
     * Create a new event instance.
     *
     * @param Batch $batch
     * @return void
     */
    public function __construct(Batch $batch)
    {
        $this->batch = $batch;
    }
}
