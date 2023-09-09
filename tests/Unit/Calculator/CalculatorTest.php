<?php

namespace App\Tests\Unit\Calculator;

use App\Utils\Calculator;
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

        // Numeric string
        self::assertEquals(15, Calculator::add("12", "13"));
        self::assertEquals(112.631, Calculator::add("12.2", 100.431));
        self::assertEquals(112.631, Calculator::add(12.2, "100.431"));
        self::assertEquals(112.631, Calculator::add("12.2", "100.431"));

        // Not numeric inout data
        self::assertEquals(null, Calculator::add("12a", "13"));
        self::assertEquals(null, Calculator::add("__", 100.431));
        self::assertEquals(null, Calculator::add(12.2, "asd"));
        self::assertEquals(null, Calculator::add("12.2", "_100.431"));
    }

    public function testSubtract() : void
    {
        // Only integers
        self::assertEquals(-1, Calculator::subtract(1, 2));
        self::assertEquals(47, Calculator::subtract(100, 53));

        // One argument int and other float
        self::assertEquals(13.5, Calculator::subtract(23.5, 10));
        self::assertEquals(4.79, Calculator::subtract(15, 20.21));

        // Only floats
        self::assertEquals(8, Calculator::subtract(10.5, 2.5));
        self::assertEquals(10.1, Calculator::subtract(12.2, 2.1));

        // Numeric string
        self::assertEquals(-1, Calculator::subtract("12", "13"));
        self::assertEquals(2.1, Calculator::subtract("12.2", 10.1));
        self::assertEquals(2.1, Calculator::subtract(12.2, "10.1"));
        self::assertEquals(2.1, Calculator::subtract("12.2", "10.1"));

        // Not numeric inout data
        self::assertEquals(null, Calculator::subtract("12a", "13"));
        self::assertEquals(null, Calculator::subtract("__", 100.431));
        self::assertEquals(null, Calculator::subtract(12.2, "asd"));
        self::assertEquals(null, Calculator::subtract("12.2", "_100.431"));
    }

    public function testMultiply() : void
    {
        // Only integers
        self::assertEquals(2, Calculator::multiply(1, 2));
        self::assertEquals(53000, Calculator::multiply(100, 53));

        // One argument int and other float
        self::assertEquals(235, Calculator::multiply(23.5, 10));
        self::assertEquals(307.5, Calculator::multiply(15, 20.5));

        // Only floats
        self::assertEquals(26.25, Calculator::multiply(10.5, 2.5));
        self::assertEquals(1.05, Calculator::multiply(0.5, 2.1));

        // Numeric string
        self::assertEquals(8, Calculator::multiply("4", "2"));
        self::assertEquals(5, Calculator::multiply("0.5", 10));
        self::assertEquals(20.2, Calculator::multiply(2, "10.1"));
        self::assertEquals(18.75, Calculator::multiply("7.5", "2.5"));

        // Not numeric inout data
        self::assertEquals(null, Calculator::multiply("12a", "13"));
        self::assertEquals(null, Calculator::multiply("__", 100.431));
        self::assertEquals(null, Calculator::multiply(12.2, "asd"));
        self::assertEquals(null, Calculator::multiply("12.2", "_100.431"));
    }

    public function testDivide() : void
    {
        // Only integers
        self::assertEquals(2, Calculator::divide(2, 1));
        self::assertEquals(4, Calculator::divide(100, 25));

        // One argument int and other float
        self::assertEquals(2.35, Calculator::divide(23.5, 10));
        self::assertEquals(2, Calculator::divide(15, 7.5));

        // Only floats
        self::assertEquals(4.25, Calculator::divide(10.5, 2.5));
        self::assertEquals(5, Calculator::divide(2.5, 0.5));

        // Numeric string
        self::assertEquals(2, Calculator::divide("4", "2"));
        self::assertEquals(0.05, Calculator::divide("0.5", 10));
        self::assertEquals(0.2, Calculator::divide(2, "10"));
        self::assertEquals(3, Calculator::divide("7.5", "2.5"));

        // Not numeric inout data
        self::assertEquals(null, Calculator::divide("12a", "13"));
        self::assertEquals(null, Calculator::divide("__", 100.431));
        self::assertEquals(null, Calculator::divide(12.2, "asd"));
        self::assertEquals(null, Calculator::divide("12.2", "_100.431"));
    }
}