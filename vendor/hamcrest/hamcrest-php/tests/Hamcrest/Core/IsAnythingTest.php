<?php
namespace Hamcrest\Core;

use Hamcrest\AbstractMatcherTest;
use stdClass;

class IsAnythingTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsAnything::anything();
    }

    public function testAlwaysEvaluatesToTrue()
    {
        assertThat(null, anything());
        assertThat(new stdClass(), anything());
        assertThat('hi', anything());
    }

    public function testHasUsefulDefaultDescription()
    {
        $this->assertDescription('ANYTHING', anything());
    }

    public function testCanOverrideDescription()
    {
        $description = 'description';
        $this->assertDescription($description, anything($description));
    }
}
