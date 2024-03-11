<?php
namespace Hamcrest\Core;

use Hamcrest\AbstractMatcherTest;

class IsNullTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsNull::nullValue();
    }

    public function testEvaluatesToTrueIfArgumentIsNull()
    {
        assertThat(null, nullValue());
        assertThat(self::ANY_NON_NULL_ARGUMENT, not(nullValue()));

        assertThat(self::ANY_NON_NULL_ARGUMENT, notNullValue());
        assertThat(null, not(notNullValue()));
    }
}
