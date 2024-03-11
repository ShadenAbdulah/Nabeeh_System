<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

use Throwable;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 */
class GoneHttpException extends HttpException
{
<<<<<<< HEAD
    public function __construct(string $message = '', ?Throwable $previous = null, int $code = 0, array $headers = [])
=======
    public function __construct(string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> parent of c8b1139b (update Ui)
    {
        parent::__construct(410, $message, $previous, $headers, $code);
    }
}
