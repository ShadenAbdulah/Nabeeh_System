<?php
namespace Hamcrest;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MatcherAssertTest extends TestCase
{

    protected function setUp()
    {
        MatcherAssert::resetCount();
    }

    public function testResetCount()
    {
        MatcherAssert::assertThat(true);
        self::assertEquals(1, MatcherAssert::getCount(), 'assertion count');
        MatcherAssert::resetCount();
        self::assertEquals(0, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithTrueArgPasses()
    {
        MatcherAssert::assertThat(true);
        MatcherAssert::assertThat('non-empty');
        MatcherAssert::assertThat(1);
        MatcherAssert::assertThat(3.14159);
        MatcherAssert::assertThat(array(true));
        self::assertEquals(5, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithFalseArgFails()
    {
        try {
            MatcherAssert::assertThat(false);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat(null);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat('');
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat(0);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat(0.0);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat(array());
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('', $ex->getMessage());
        }
        self::assertEquals(6, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithIdentifierAndTrueArgPasses()
    {
        MatcherAssert::assertThat('identifier', true);
        MatcherAssert::assertThat('identifier', 'non-empty');
        MatcherAssert::assertThat('identifier', 1);
        MatcherAssert::assertThat('identifier', 3.14159);
        MatcherAssert::assertThat('identifier', array(true));
        self::assertEquals(5, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithIdentifierAndFalseArgFails()
    {
        try {
            MatcherAssert::assertThat('identifier', false);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('identifier', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat('identifier', null);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('identifier', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat('identifier', '');
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('identifier', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat('identifier', 0);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('identifier', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat('identifier', 0.0);
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('identifier', $ex->getMessage());
        }
        try {
            MatcherAssert::assertThat('identifier', array());
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals('identifier', $ex->getMessage());
        }
        self::assertEquals(6, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithActualValueAndMatcherArgsThatMatchPasses()
    {
        MatcherAssert::assertThat(true, is(true));
        self::assertEquals(1, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithActualValueAndMatcherArgsThatDontMatchFails()
    {
        $expected = 'expected';
        $actual = 'actual';

        $expectedMessage =
            'Expected: "expected"' . PHP_EOL .
            '     but: was "actual"';

        try {
            MatcherAssert::assertThat($actual, equalTo($expected));
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals($expectedMessage, $ex->getMessage());
            self::assertEquals(1, MatcherAssert::getCount(), 'assertion count');
        }
    }

    public function testAssertThatWithIdentifierAndActualValueAndMatcherArgsThatMatchPasses()
    {
        MatcherAssert::assertThat('identifier', true, is(true));
        self::assertEquals(1, MatcherAssert::getCount(), 'assertion count');
    }

    public function testAssertThatWithIdentifierAndActualValueAndMatcherArgsThatDontMatchFails()
    {
        $expected = 'expected';
        $actual = 'actual';

        $expectedMessage =
            'identifier' . PHP_EOL .
            'Expected: "expected"' . PHP_EOL .
            '     but: was "actual"';

        try {
            MatcherAssert::assertThat('identifier', $actual, equalTo($expected));
            self::fail('expected assertion failure');
        } catch (AssertionError $ex) {
            self::assertEquals($expectedMessage, $ex->getMessage());
            self::assertEquals(1, MatcherAssert::getCount(), 'assertion count');
        }
    }

    public function testAssertThatWithNoArgsThrowsErrorAndDoesntIncrementCount()
    {
        try {
            MatcherAssert::assertThat();
            self::fail('expected invalid argument exception');
        } catch (InvalidArgumentException $ex) {
            self::assertEquals(0, MatcherAssert::getCount(), 'assertion count');
        }
    }

    public function testAssertThatWithFourArgsThrowsErrorAndDoesntIncrementCount()
    {
        try {
            MatcherAssert::assertThat(1, 2, 3, 4);
            self::fail('expected invalid argument exception');
        } catch (InvalidArgumentException $ex) {
            self::assertEquals(0, MatcherAssert::getCount(), 'assertion count');
        }
    }
}
