<?php

namespace Laravel\Fortify\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;

class RecoveryCodesGenerated
{
    use Dispatchable;

    /**
     * The user instance.
     *
     * @var User
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  User  $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}
