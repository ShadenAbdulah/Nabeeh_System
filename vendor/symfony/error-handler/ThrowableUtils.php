<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\ErrorHandler;

use ErrorException;
use ParseError;
use Symfony\Component\ErrorHandler\Exception\SilencedErrorContext;
use Throwable;
use TypeError;
use const E_ERROR;
use const E_PARSE;
use const E_RECOVERABLE_ERROR;

/**
 * @internal
 */
class ThrowableUtils
{
    public static function getSeverity(SilencedErrorContext|Throwable $throwable): int
    {
        if ($throwable instanceof ErrorException || $throwable instanceof SilencedErrorContext) {
            return $throwable->getSeverity();
        }

        if ($throwable instanceof ParseError) {
            return E_PARSE;
        }

        if ($throwable instanceof TypeError) {
            return E_RECOVERABLE_ERROR;
        }

        return E_ERROR;
    }
}
