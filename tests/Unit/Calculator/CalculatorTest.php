<?php

namespace App\Tests\Unit\Calculator;

use App\Utils\Calculator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd() : void
    {
        // Only integers
        self::assertEquals(3, Calculator::add(1, 2));
        self::assertEquals(153, Calculator::add(100, 53));

        // One argument int and other float
        self::assertEquals(33.5, Calculator::add(23.5, 10));
        self::assertEquals(35.21, Calculator::add(15, 20.21));

        // Only floats
        self::assertEquals(13, Calculator::add(10.5, 2.5));
        self::assertEquals(112.631, Calculator::add(12.2, 100.431));
    }
}