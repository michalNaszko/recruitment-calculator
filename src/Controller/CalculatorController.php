<?php

namespace App\Controller;

use App\Service\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    private $logger;
    private $calculator;
    public function __construct(LoggerInterface $logger, Calculator $calculator)
    {
        $this->logger = $logger;
        $this->calculator = $calculator;
    }

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
    public function calculator(string $numA, string $operation, string $numB): JsonResponse
    {
        $this->logger->info('Received request to calculate: ' . $numA . $operation . $numB);
        return new JsonResponse(['result' => $this->executeOperation($numA, $operation, $numB)]);
    }

    private function executeOperation($numA, $operation, $numB)
    {
        switch ($operation) {
            case "+":
                return $this->calculator->add($numA, $numB);
            case "-":
                return $this->calculator->subtract($numA, $numB);
            case "*":
                return $this->calculator->multiply($numA, $numB);
            case ":":
                return $this->calculator->divide($numA, $numB);
            default:
                return null;
        }
    }
}
