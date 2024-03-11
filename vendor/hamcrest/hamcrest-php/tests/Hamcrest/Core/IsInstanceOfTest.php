<?php
namespace Hamcrest\Core;

use Hamcrest\AbstractMatcherTest;
use stdClass;

class IsInstanceOfTest extends AbstractMatcherTest
{

    private $_baseClassInstance;
    private $_subClassInstance;

    protected function setUp()
    {
        $this->_baseClassInstance = new SampleBaseClass('good');
        $this->_subClassInstance = new SampleSubClass('good');
    }

    protected function createMatcher()
    {
        return IsInstanceOf::anInstanceOf('stdClass');
    }

    public function testEvaluatesToTrueIfArgumentIsInstanceOfASpecificClass()
    {
        assertThat($this->_baseClassInstance, anInstanceOf('Hamcrest\Core\SampleBaseClass'));
        assertThat($this->_subClassInstance, anInstanceOf('Hamcrest\Core\SampleSubClass'));
        assertThat(null, not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
        assertThat(new stdClass(), not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
    }

    public function testEvaluatesToFalseIfArgumentIsNotAnObject()
    {
        assertThat(null, not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
        assertThat(false, not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
        assertThat(5, not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
        assertThat('foo', not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
        assertThat(array(1, 2, 3), not(anInstanceOf('Hamcrest\Core\SampleBaseClass')));
    }

    public function testHasAReadableDescription()
    {
        $this->assertDescription('an instance of stdClass', anInstanceOf('stdClass'));
    }

    public function testDecribesActualClassInMismatchMessage()
    {
        $this->assertMismatchDescription(
            '[Hamcrest\Core\SampleBaseClass] <good>',
            anInstanceOf('Hamcrest\Core\SampleSubClass'),
            $this->_baseClassInstance
        );
    }
}
