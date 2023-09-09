<?php

namespace App\Utils;

class Calculator
{
    public static function add ($numA, $numB)
    {
        return $numA + $numB;
    }

    public static function subtract ($numA, $numB)
    {
        return $numA - $numB;
    }

    public static function multiply ($numA, $numB)
    {
        return $numA * $numB;
    }

    public static function divide ($numA, $numB)
    {
        return $numA / $numB;
    }
}