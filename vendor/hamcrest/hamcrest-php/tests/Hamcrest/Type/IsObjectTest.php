<?php
namespace Hamcrest\Type;

use Hamcrest\AbstractMatcherTest;
use stdClass;

class IsObjectTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsObject::objectValue();
    }

    public function testEvaluatesToTrueIfArgumentMatchesType()
    {
        assertThat(new stdClass, objectValue());
    }

    public function testEvaluatesToFalseIfArgumentDoesntMatchType()
    {
        assertThat(false, not(objectValue()));
        assertThat(5, not(objectValue()));
        assertThat('foo', not(objectValue()));
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription('an object', objectValue());
    }

    public function testDecribesActualTypeInMismatchMessage()
    {
        $this->assertMismatchDescription('was null', objectValue(), null);
        $this->assertMismatchDescription('was a string "foo"', objectValue(), 'foo');
    }
}
