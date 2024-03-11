<?php

namespace Illuminate\Contracts\Validation;

use Closure;
use Illuminate\Translation\PotentiallyTranslatedString;

/**
 * @deprecated see ValidationRule
 */
interface InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param Closure(string): PotentiallyTranslatedString $fail
     * @return void
     */
    public function __invoke(string $attribute, mixed $value, Closure $fail);
}
