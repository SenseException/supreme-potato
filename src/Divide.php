<?php

namespace Budgegeria\SupremePotato;

use Budgegeria\SupremePotato\Exception\CalculationArgument;

class Divide implements Calculation
{
    /**
     * {@inheritdoc}
     */
    public function calculate(int $firstNumber, int $secondNumber) : float
    {
        if (0 === $secondNumber) {
            throw CalculationArgument::shouldNotBeZero();
        }

        return $firstNumber / $secondNumber;
    }
}