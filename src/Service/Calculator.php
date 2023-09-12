<?php

namespace App\Service;

class Calculator
{
    public function add ($numA, $numB)
    {
        return (is_numeric($numA) and is_numeric($numB)) ? ($numA + $numB) : null;
    }

    public function subtract ($numA, $numB)
    {
        return (is_numeric($numA) and is_numeric($numB)) ? ($numA - $numB) : null;
    }

    public function multiply ($numA, $numB)
    {
        return (is_numeric($numA) and is_numeric($numB)) ? ($numA * $numB) : null;
    }

    public function divide ($numA, $numB)
    {
        return (is_numeric($numA) and is_numeric($numB)) ? ($numA / $numB) : null;
    }
}