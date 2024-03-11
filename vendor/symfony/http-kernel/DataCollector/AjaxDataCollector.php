<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

/**
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final
 */
class AjaxDataCollector extends DataCollector
{
<<<<<<< HEAD
    public function collect(Request $request, Response $response, ?Throwable $exception = null): void
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null): void
>>>>>>> parent of c8b1139b (update Ui)
    {
        // all collecting is done client side
    }

    public function reset(): void
    {
        // all collecting is done client side
    }

    public function getName(): string
    {
        return 'ajax';
    }
}
