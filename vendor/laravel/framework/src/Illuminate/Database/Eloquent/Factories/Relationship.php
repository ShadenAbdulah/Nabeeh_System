<?php

namespace Illuminate\Database\Eloquent\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
use Illuminate\Database\Eloquent\Relations\MorphOneOrMany;
use Illuminate\Support\Collection;

class Relationship
{
    /**
     * The related factory instance.
     *
     * @var Factory
     */
    protected $factory;

    /**
     * The relationship name.
     *
     * @var string
     */
    protected $relationship;

    /**
     * Create a new child relationship instance.
     *
     * @param Factory $factory
     * @param  string  $relationship
     * @return void
     */
    public function __construct(Factory $factory, $relationship)
    {
        $this->factory = $factory;
        $this->relationship = $relationship;
    }

    /**
     * Create the child relationship for the given parent model.
     *
     * @param Model $parent
     * @return void
     */
    public function createFor(Model $parent)
    {
        $relationship = $parent->{$this->relationship}();

        if ($relationship instanceof MorphOneOrMany) {
            $this->factory->state([
                $relationship->getMorphType() => $relationship->getMorphClass(),
                $relationship->getForeignKeyName() => $relationship->getParentKey(),
            ])->create([], $parent);
        } elseif ($relationship instanceof HasOneOrMany) {
            $this->factory->state([
                $relationship->getForeignKeyName() => $relationship->getParentKey(),
            ])->create([], $parent);
        } elseif ($relationship instanceof BelongsToMany) {
            $relationship->attach($this->factory->create([], $parent));
        }
    }

    /**
     * Specify the model instances to always use when creating relationships.
     *
     * @param  Collection  $recycle
     * @return $this
     */
    public function recycle($recycle)
    {
        $this->factory = $this->factory->recycle($recycle);

        return $this;
    }
}
