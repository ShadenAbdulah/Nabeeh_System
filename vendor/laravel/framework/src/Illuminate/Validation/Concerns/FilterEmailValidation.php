<?php

namespace Illuminate\Validation\Concerns;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Validation\EmailValidation;
use Egulias\EmailValidator\Warning\Warning;

class FilterEmailValidation implements EmailValidation
{
    /**
     * The flags to pass to the filter_var function.
     *
     * @var int|null
     */
    protected $flags;

    /**
     * Create a new validation instance.
     *
     * @param  int  $flags
     * @return void
     */
    public function __construct($flags = null)
    {
        $this->flags = $flags;
    }

    /**
     * Create a new instance which allows any unicode characters in local-part.
     *
     * @return static
     */
    public static function unicode()
    {
        return new static(FILTER_FLAG_EMAIL_UNICODE);
    }

    /**
     * Returns true if the given email is valid.
     *
     * @param  string  $email
     * @param EmailLexer $emailLexer
     * @return bool
     */
    public function isValid(string $email, EmailLexer $emailLexer): bool
    {
        return is_null($this->flags)
                    ? filter_var($email, FILTER_VALIDATE_EMAIL) !== false
                    : filter_var($email, FILTER_VALIDATE_EMAIL, $this->flags) !== false;
    }

    /**
     * Returns the validation error.
     *
     * @return InvalidEmail|null
     */
    public function getError(): ?InvalidEmail
    {
        return null;
    }

    /**
     * Returns the validation warnings.
     *
     * @return Warning[]
     */
    public function getWarnings(): array
    {
        return [];
    }
}
