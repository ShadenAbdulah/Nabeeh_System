<?php

namespace Illuminate\Support\Traits;

use Illuminate\Support\HigherOrderTapProxy;

trait Tappable
{
    /**
     * Call the given Closure with this instance then return the instance.
     *
     * @param  callable|null  $callback
     * @return $this|HigherOrderTapProxy
     */
    public function tap($callback = null)
    {
        return tap($this, $callback);
    }
}
