<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Uid\Factory;

use DateTimeInterface;
use Symfony\Component\Uid\Ulid;

class UlidFactory
{
<<<<<<< HEAD
    public function create(?DateTimeInterface $time = null): Ulid
=======
    public function create(\DateTimeInterface $time = null): Ulid
>>>>>>> parent of c8b1139b (update Ui)
    {
        return new Ulid(null === $time ? null : Ulid::generate($time));
    }
}
