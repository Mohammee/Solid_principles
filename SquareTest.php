<?php


use SOLID\LSP\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{

    /**
     * @var Square
     */
    private $square;


    protected function setUp(): void
    {
        $this->square = new Square();
        $this->square->setHeight(5);
        $this->square->setWidth(10);
    }

    public function test_that_area_is_valid()
    {
        $this->assertEquals(100 , $this->square->calculateArea());
    }

}
