<?php

namespace Illuminate\Contracts\Validation;

use Closure;
use Illuminate\Translation\PotentiallyTranslatedString;

interface ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param Closure(string): PotentiallyTranslatedString $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void;
}
