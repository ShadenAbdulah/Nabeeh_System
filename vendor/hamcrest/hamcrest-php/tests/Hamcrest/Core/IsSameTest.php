<?php
namespace Hamcrest\Core;

use Hamcrest\AbstractMatcherTest;
use stdClass;

class IsSameTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsSame::sameInstance(new stdClass());
    }

    public function testEvaluatesToTrueIfArgumentIsReferenceToASpecifiedObject()
    {
        $o1 = new stdClass();
        $o2 = new stdClass();

        assertThat($o1, sameInstance($o1));
        assertThat($o2, not(sameInstance($o1)));
    }

    public function testReturnsReadableDescriptionFromToString()
    {
        $this->assertDescription('sameInstance("ARG")', sameInstance('ARG'));
    }

    public function testReturnsReadableDescriptionFromToStringWhenInitialisedWithNull()
    {
        $this->assertDescription('sameInstance(null)', sameInstance(null));
    }
}
