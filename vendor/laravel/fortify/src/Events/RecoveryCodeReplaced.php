<?php

namespace Laravel\Fortify\Events;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Queue\SerializesModels;

class RecoveryCodeReplaced
{
    use SerializesModels;

    /**
     * The authenticated user.
     *
     * @var Authenticatable
     */
    public $user;

    /**
     * The recovery code.
     *
     * @var string
     */
    public $code;

    /**
     * Create a new event instance.
     *
     * @param  Authenticatable  $user
     * @param  string  $code
     * @return void
     */
    public function __construct($user, $code)
    {
        $this->user = $user;
        $this->code = $code;
    }
}
