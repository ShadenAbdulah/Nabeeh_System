<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Exception;

use LogicException;
use Throwable;

/**
 * Raised when a session does not exist. This happens in the following cases:
 * - the session is not enabled
 * - attempt to read a session outside a request context (ie. cli script).
 *
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class SessionNotFoundException extends LogicException implements RequestExceptionInterface
{
<<<<<<< HEAD
    public function __construct(string $message = 'There is currently no session available.', int $code = 0, ?Throwable $previous = null)
=======
    public function __construct(string $message = 'There is currently no session available.', int $code = 0, \Throwable $previous = null)
>>>>>>> parent of c8b1139b (update Ui)
    {
        parent::__construct($message, $code, $previous);
    }
}
