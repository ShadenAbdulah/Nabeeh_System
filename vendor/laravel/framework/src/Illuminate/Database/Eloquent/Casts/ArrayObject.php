<?php

namespace Illuminate\Database\Eloquent\Casts;

use ArrayObject as BaseArrayObject;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use JsonSerializable;

/**
 * @template TKey of array-key
 * @template TItem
 *
 * @extends  BaseArrayObject<TKey, TItem>
 */
class ArrayObject extends BaseArrayObject implements Arrayable, JsonSerializable
{
    /**
     * Get a collection containing the underlying array.
     *
     * @return Collection
     */
    public function collect()
    {
        return collect($this->getArrayCopy());
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->getArrayCopy();
    }

    /**
     * Get the array that should be JSON serialized.
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->getArrayCopy();
    }
}
