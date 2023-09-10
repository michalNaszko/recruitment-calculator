<?php

namespace App\Controller;

use App\Utils\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/", name="app_calculator")
     */
    public function index(): Response
    {
        return $this->render('calculator.html.twig');
    }

    /**
     * @Route("/{numA}/{operation}/{numB}", name="calculation",
     *     requirements={"numA"="^\d+(?:\.\d+)?$", "operation"="\+|-|\*|:", "numB"="^\d+(?:\.\d+)?$"})
     */
    public function calculator(string $numA, string $operation, string $numB): Response
    {
        echo $numA . "<br/>";
        echo $operation . "<br/>";
        echo $numB . "<br/>";
        echo $this->executeOperation($numA, $operation, $numB) . "<br/>";
        return $this->render('calculator.html.twig', [
            "result" => $this->executeOperation($numA, $operation, $numB)
        ]);
    }

    private function executeOperation($numA, $operation, $numB)
    {
        switch ($operation) {
            case "+":
                return Calculator::add($numA, $numB);
            case "-":
                return Calculator::subtract($numA, $numB);
            case "*":
                return Calculator::multiply($numA, $numB);
            case ":":
                return Calculator::divide($numA, $numB);
            default:
                return null;
        }
    }
}
