<?php

require_once 'MyClass.php';

class MyClassTestWithDataProvider extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider sumDataProvider
     * @param $a
     * @param $b
     * @param $sum
     */
    public function testSumWithDataProvider($a, $b, $sum)
    {
        $this->assertEquals($sum, MyClass::sum($a, $b), "Wrong sum");
    }

    /**
     * Set of data for testing.
     * @return array
     */
    public function sumDataProvider()
    {
        return array(
            array(2, 2, 4),
            array(2, 3, 5),
            array(3, -5, -2)
        );
    }
}
