<?php

namespace Budgegeria\SupremePotato;

interface Calculation
{
    /**
     * This awesome calculation interface does only calculate with integers.
     *
     * Why only integer? Because Supreme Potatoes do only integers, that's why. :-P
     *
     * @param int $firstNumber
     * @param int $secondNumber
     * @return float
     * @throws \Budgegeria\SupremePotato\Exception\CalculationArgument
     */
    public function calculate(int $firstNumber, int $secondNumber) : float;
}