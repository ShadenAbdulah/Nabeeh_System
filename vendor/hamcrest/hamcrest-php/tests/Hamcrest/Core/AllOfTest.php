<?php
namespace Hamcrest\Core;

use Hamcrest\AbstractMatcherTest;

class AllOfTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return AllOf::allOf('irrelevant');
    }

    public function testEvaluatesToTheLogicalConjunctionOfTwoOtherMatchers()
    {
        assertThat('good', allOf('good', 'good'));

        assertThat('good', not(allOf('bad', 'good')));
        assertThat('good', not(allOf('good', 'bad')));
        assertThat('good', not(allOf('bad', 'bad')));
    }

    public function testEvaluatesToTheLogicalConjunctionOfManyOtherMatchers()
    {
        assertThat('good', allOf('good', 'good', 'good', 'good', 'good'));
        assertThat('good', not(allOf('good', endsWith('d'), 'bad', 'good', 'good')));
    }

    public function testSupportsMixedTypes()
    {
        $all = allOf(
            equalTo(new SampleBaseClass('good')),
            equalTo(new SampleBaseClass('good')),
            equalTo(new SampleSubClass('ugly'))
        );

        $negated = not($all);

        assertThat(new SampleSubClass('good'), $negated);
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription(
            '("good" and "bad" and "ugly")',
            allOf('good', 'bad', 'ugly')
        );
    }

    public function testMismatchDescriptionDescribesFirstFailingMatch()
    {
        $this->assertMismatchDescription(
            '"good" was "bad"',
            allOf('bad', 'good'),
            'bad'
        );
    }
}
