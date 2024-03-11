<?php
namespace Hamcrest;

/* Test-specific subclass only */

use RuntimeException;

class BaseMatcherTest extends BaseMatcher
{

    public function matches($item)
    {
        throw new RuntimeException();
    }

    public function describeTo(Description $description)
    {
        $description->appendText('SOME DESCRIPTION');
    }

    public function testDescribesItselfWithToStringMethod()
    {
        $someMatcher = new SomeMatcher();
        $this->assertEquals('SOME DESCRIPTION', (string) $someMatcher);
    }
}
