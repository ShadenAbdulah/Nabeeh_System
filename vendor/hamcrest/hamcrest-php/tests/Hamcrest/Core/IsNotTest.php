<?php
namespace Hamcrest\Core;

use Hamcrest\AbstractMatcherTest;

class IsNotTest extends AbstractMatcherTest
{

    protected function createMatcher()
    {
        return IsNot::not('something');
    }

    public function testEvaluatesToTheTheLogicalNegationOfAnotherMatcher()
    {
        $this->assertMatches(not(equalTo('A')), 'B', 'should match');
        $this->assertDoesNotMatch(not(equalTo('B')), 'B', 'should not match');
    }

    public function testProvidesConvenientShortcutForNotEqualTo()
    {
        $this->assertMatches(not('A'), 'B', 'should match');
        $this->assertMatches(not('B'), 'A', 'should match');
        $this->assertDoesNotMatch(not('A'), 'A', 'should not match');
        $this->assertDoesNotMatch(not('B'), 'B', 'should not match');
    }

    public function testUsesDescriptionOfNegatedMatcherWithPrefix()
    {
        $this->assertDescription('not a value greater than <2>', not(greaterThan(2)));
        $this->assertDescription('not "A"', not('A'));
    }
}
