<?php

namespace Illuminate\Contracts\Broadcasting;

use Illuminate\Broadcasting\Channel;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|Channel[]|string[]|string
     */
    public function broadcastOn();
}
