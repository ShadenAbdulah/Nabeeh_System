<?php

namespace Illuminate\Support\Testing\Fakes;

use Illuminate\Bus\Batch;
use Illuminate\Bus\PendingBatch;
use Illuminate\Support\Collection;

class PendingBatchFake extends PendingBatch
{
    /**
     * The fake bus instance.
     *
     * @var BusFake
     */
    protected $bus;

    /**
     * Create a new pending batch instance.
     *
     * @param BusFake $bus
     * @param Collection $jobs
     * @return void
     */
    public function __construct(BusFake $bus, Collection $jobs)
    {
        $this->bus = $bus;
        $this->jobs = $jobs;
    }

    /**
     * Dispatch the batch.
     *
     * @return Batch
     */
    public function dispatch()
    {
        return $this->bus->recordPendingBatch($this);
    }

    /**
     * Dispatch the batch after the response is sent to the browser.
     *
     * @return Batch
     */
    public function dispatchAfterResponse()
    {
        return $this->bus->recordPendingBatch($this);
    }
}
