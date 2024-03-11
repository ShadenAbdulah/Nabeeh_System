<?php

namespace Illuminate\Contracts\Bus;

use Illuminate\Bus\Batch;
use Illuminate\Bus\PendingBatch;
use Illuminate\Support\Collection;

interface QueueingDispatcher extends Dispatcher
{
    /**
     * Attempt to find the batch with the given ID.
     *
     * @param  string  $batchId
     * @return Batch|null
     */
    public function findBatch(string $batchId);

    /**
     * Create a new batch of queueable jobs.
     *
     * @param  Collection|array  $jobs
     * @return PendingBatch
     */
    public function batch($jobs);

    /**
     * Dispatch a command to its appropriate handler behind a queue.
     *
     * @param  mixed  $command
     * @return mixed
     */
    public function dispatchToQueue($command);
}
