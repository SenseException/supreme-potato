<?php

namespace Budgegeria\SupremePotato;

class MultipleCalculation
{
    /**
     * @var Calculation
     */
    private $calculation;

    /**
     * @param Calculation $calculation
     */
    public function __construct(Calculation $calculation)
    {
        $this->calculation = $calculation;
    }

    /**
     * @param int $startValue
     * @return float
     */
    public function calc(int $startValue) : float
    {
        $firstResult = $this->calculation->calculate($startValue, 1);
        return $this->calculation->calculate($firstResult, 2);
    }
}