<?php

namespace Laravel\Sanctum\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Sanctum\NewAccessToken;

interface HasApiTokens
{
    /**
     * Get the access tokens that belong to model.
     *
     * @return MorphMany
     */
    public function tokens();

    /**
     * Determine if the current API token has a given scope.
     *
     * @param  string  $ability
     * @return bool
     */
    public function tokenCan(string $ability);

    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $abilities
     * @return NewAccessToken
     */
    public function createToken(string $name, array $abilities = ['*']);

    /**
     * Get the access token currently associated with the user.
     *
     * @return HasAbilities
     */
    public function currentAccessToken();

    /**
     * Set the current access token for the user.
     *
     * @param HasAbilities $accessToken
     * @return HasApiTokens
     */
    public function withAccessToken($accessToken);
}
