<?php

require_once 'Pageable.php';

class PageableTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Pageable
     */
    protected $pageable;

    public function setUp()
    {
        $this->pageable = new Pageable(1, 10);
    }

    public function testGet()
    {
        $this->pageable->count_of_objects = 25;
        $this->assertEquals(25, $this->pageable->count_of_objects);
        $this->assertEquals(10, $this->pageable->count_objects_on_page);
    }

    /**
     * @dataProvider countPagesDataProvider
     * @param $count
     * @param $pages
     */
    public function testGetCountsOfPages($count, $pages)
    {
        $this->pageable->count_of_objects = $count;
        $this->assertEquals($pages, $this->pageable->get_count_of_pages());
    }

    public function countPagesDataProvider()
    {
        return array(
            array(5, 1),
            array(15, 2),
            array(0, 0),
            array(11, 2),
        );
    }

    public function testGetText()
    {
        $this->pageable->count_of_objects = 95;
        $this->assertEquals("1 <b>2</b> 3 4 ... 10", $this->pageable->getText(2));

        $this->assertEquals("<b>1</b> 2 3 ... 10", $this->pageable->getText(1));

        $this->assertEquals("1 ... 3 4 <b>5</b> 6 7 ... 10", $this->pageable->getText(5));
        $this->assertEquals("1 ... 8 9 <b>10</b>", $this->pageable->getText(10));

        // TODO
        $this->assertEquals("1 2 3 <b>4</b> 5 6 ... 10", $this->pageable->getText(4));
    }
}