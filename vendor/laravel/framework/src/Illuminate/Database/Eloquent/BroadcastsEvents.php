<?php

namespace Illuminate\Database\Eloquent;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PendingBroadcast;
use Illuminate\Contracts\Broadcasting\HasBroadcastChannel;
use Illuminate\Support\Arr;

trait BroadcastsEvents
{
    /**
     * Boot the event broadcasting trait.
     *
     * @return void
     */
    public static function bootBroadcastsEvents()
    {
        static::created(function ($model) {
            $model->broadcastCreated();
        });

        static::updated(function ($model) {
            $model->broadcastUpdated();
        });

        if (method_exists(static::class, 'bootSoftDeletes')) {
            static::softDeleted(function ($model) {
                $model->broadcastTrashed();
            });

            static::restored(function ($model) {
                $model->broadcastRestored();
            });
        }

        static::deleted(function ($model) {
            $model->broadcastDeleted();
        });
    }

    /**
     * Broadcast that the model was created.
     *
     * @param  Channel|HasBroadcastChannel|array|null  $channels
     * @return PendingBroadcast
     */
    public function broadcastCreated($channels = null)
    {
        return $this->broadcastIfBroadcastChannelsExistForEvent(
            $this->newBroadcastableModelEvent('created'), 'created', $channels
        );
    }

    /**
     * Broadcast that the model was updated.
     *
     * @param  Channel|HasBroadcastChannel|array|null  $channels
     * @return PendingBroadcast
     */
    public function broadcastUpdated($channels = null)
    {
        return $this->broadcastIfBroadcastChannelsExistForEvent(
            $this->newBroadcastableModelEvent('updated'), 'updated', $channels
        );
    }

    /**
     * Broadcast that the model was trashed.
     *
     * @param  Channel|HasBroadcastChannel|array|null  $channels
     * @return PendingBroadcast
     */
    public function broadcastTrashed($channels = null)
    {
        return $this->broadcastIfBroadcastChannelsExistForEvent(
            $this->newBroadcastableModelEvent('trashed'), 'trashed', $channels
        );
    }

    /**
     * Broadcast that the model was restored.
     *
     * @param  Channel|HasBroadcastChannel|array|null  $channels
     * @return PendingBroadcast
     */
    public function broadcastRestored($channels = null)
    {
        return $this->broadcastIfBroadcastChannelsExistForEvent(
            $this->newBroadcastableModelEvent('restored'), 'restored', $channels
        );
    }

    /**
     * Broadcast that the model was deleted.
     *
     * @param  Channel|HasBroadcastChannel|array|null  $channels
     * @return PendingBroadcast
     */
    public function broadcastDeleted($channels = null)
    {
        return $this->broadcastIfBroadcastChannelsExistForEvent(
            $this->newBroadcastableModelEvent('deleted'), 'deleted', $channels
        );
    }

    /**
     * Broadcast the given event instance if channels are configured for the model event.
     *
     * @param  mixed  $instance
     * @param  string  $event
     * @param  mixed  $channels
     * @return PendingBroadcast|null
     */
    protected function broadcastIfBroadcastChannelsExistForEvent($instance, $event, $channels = null)
    {
        if (! static::$isBroadcasting) {
            return;
        }

        if (! empty($this->broadcastOn($event)) || ! empty($channels)) {
            return broadcast($instance->onChannels(Arr::wrap($channels)));
        }
    }

    /**
     * Create a new broadcastable model event event.
     *
     * @param  string  $event
     * @return mixed
     */
    public function newBroadcastableModelEvent($event)
    {
        return tap($this->newBroadcastableEvent($event), function ($event) {
            $event->connection = property_exists($this, 'broadcastConnection')
                            ? $this->broadcastConnection
                            : $this->broadcastConnection();

            $event->queue = property_exists($this, 'broadcastQueue')
                            ? $this->broadcastQueue
                            : $this->broadcastQueue();

            $event->afterCommit = property_exists($this, 'broadcastAfterCommit')
                            ? $this->broadcastAfterCommit
                            : $this->broadcastAfterCommit();
        });
    }

    /**
     * Create a new broadcastable model event for the model.
     *
     * @param  string  $event
     * @return BroadcastableModelEventOccurred
     */
    protected function newBroadcastableEvent(string $event)
    {
        return new BroadcastableModelEventOccurred($this, $event);
    }

    /**
     * Get the channels that model events should broadcast on.
     *
     * @param  string  $event
     * @return Channel|array
     */
    public function broadcastOn($event)
    {
        return [$this];
    }

    /**
     * Get the queue connection that should be used to broadcast model events.
     *
     * @return string|null
     */
    public function broadcastConnection()
    {
        //
    }

    /**
     * Get the queue that should be used to broadcast model events.
     *
     * @return string|null
     */
    public function broadcastQueue()
    {
        //
    }

    /**
     * Determine if the model event broadcast queued job should be dispatched after all transactions are committed.
     *
     * @return bool
     */
    public function broadcastAfterCommit()
    {
        return false;
    }
}
