<?php

namespace App\Tests\Unit\Calculator;

use App\Utils\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd() : void
    {
        self::assertEquals(3, Calculator::add(1, 2));
    }
}