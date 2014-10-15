<?php

require_once 'MyClass.php';

class MyClassTestSimple extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $this->assertEquals(0, MyClass::sum(0, 0), "Wrong sum");
        $this->assertTrue(1 == MyClass::sum(0, 1), "Wrong sum");

        $this->assertNotNull(MyClass::sum(2, 3), "Sum is null");

        $this->assertEquals(5, MyClass::sum(2, 3), "Wrong sum");
        $this->assertEquals(-5, MyClass::sum(2, -7), "Wrong sum");
    }
}
