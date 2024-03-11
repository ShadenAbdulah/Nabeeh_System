<?php
namespace Hamcrest\Type;

use Hamcrest\AbstractMatcherTest;

class IsBooleanTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsBoolean::booleanValue();
    }

    public function testEvaluatesToTrueIfArgumentMatchesType()
    {
        assertThat(false, booleanValue());
        assertThat(true, booleanValue());
    }

    public function testEvaluatesToFalseIfArgumentDoesntMatchType()
    {
        assertThat(array(), not(booleanValue()));
        assertThat(5, not(booleanValue()));
        assertThat('foo', not(booleanValue()));
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription('a boolean', booleanValue());
    }

    public function testDecribesActualTypeInMismatchMessage()
    {
        $this->assertMismatchDescription('was null', booleanValue(), null);
        $this->assertMismatchDescription('was a string "foo"', booleanValue(), 'foo');
    }
}
