<?php

namespace Laravel\Fortify\Contracts;

use Illuminate\Foundation\Auth\User;

interface CreatesNewUsers
{
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return User
     */
    public function create(array $input);
}
