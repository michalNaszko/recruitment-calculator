<?php

namespace App\Utils;

class Calculator
{
    public static function add ($numA, $numB)
    {
        return is_numeric($numA) and is_numeric($numB) ? ($numA + $numB) : null;
    }

    public static function subtract ($numA, $numB)
    {
        return is_numeric($numA) and is_numeric($numB) ? ($numA - $numB) : null;
    }

    public static function multiply ($numA, $numB)
    {
        return is_numeric($numA) and is_numeric($numB) ? ($numA * $numB) : null;
    }

    public static function divide ($numA, $numB)
    {
        return is_numeric($numA) and is_numeric($numB) ? ($numA / $numB) : null;
    }
}