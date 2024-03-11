<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license   https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link      https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery;

use Mockery\LegacyMockInterface;

interface MockInterface extends LegacyMockInterface
{
    /**
     * @param mixed $something  String method name or map of method => return
     * @return self|ExpectationInterface|Expectation|HigherOrderMessage
     */
    public function allows($something = []);

    /**
     * @param mixed $something  String method name (optional)
     * @return ExpectationInterface|Expectation|ExpectsHigherOrderMessage
     */
    public function expects($something = null);
}
