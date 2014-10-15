<?php

require_once 'MyClass.php';

class MyClassTestWithSetUp extends PHPUnit_Framework_TestCase
{
    /**
     * @var MyClass
     */
    protected $myClass;

    static function setUpBeforeClass()
    {
        // create classes and other resources used by all tests
        echo "setUpBeforeClass" . PHP_EOL;
    }

    function setUp()
    {
        // create new instance for each test
        $this->myClass = new MyClass();
        echo "setUp" . PHP_EOL;
    }

    function tearDown()
    {
        $this->myClass = NULL;
        // close files, connections...
        echo "tearDown" . PHP_EOL;
    }

    public function testSum()
    {
        echo "testSum" . PHP_EOL;
        $this->assertEquals(20, $this->myClass->sum(13, 7));
    }

    public function testSumNulls()
    {
        echo "testSumNulls" . PHP_EOL;
        $this->assertNotNull($this->myClass->sum(null, 0));
    }
}
