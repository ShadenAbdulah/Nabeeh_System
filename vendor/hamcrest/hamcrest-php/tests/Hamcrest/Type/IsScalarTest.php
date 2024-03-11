<?php
namespace Hamcrest\Type;

use Hamcrest\AbstractMatcherTest;
use stdClass;

class IsScalarTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsScalar::scalarValue();
    }

    public function testEvaluatesToTrueIfArgumentMatchesType()
    {
        assertThat(true, scalarValue());
        assertThat(5, scalarValue());
        assertThat(5.3, scalarValue());
        assertThat('5', scalarValue());
    }

    public function testEvaluatesToFalseIfArgumentDoesntMatchType()
    {
        assertThat(null, not(scalarValue()));
        assertThat(array(), not(scalarValue()));
        assertThat(array(5), not(scalarValue()));
        assertThat(tmpfile(), not(scalarValue()));
        assertThat(new stdClass(), not(scalarValue()));
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription('a scalar', scalarValue());
    }

    public function testDecribesActualTypeInMismatchMessage()
    {
        $this->assertMismatchDescription('was null', scalarValue(), null);
        $this->assertMismatchDescription('was an array ["foo"]', scalarValue(), array('foo'));
    }
}
