<?php

namespace Budgegeria\SupremePotato;

class MultipleCalculation
{
    /**
     * @var Calculation
     */
    private $calculation;

    /**
     * @var int
     */
    private $firstCalcValue = 1;

    /**
     * @var int
     */
    private $secondCalcValue = 2;

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
        $firstResult = $this->calculation->calculate($startValue, $this->firstCalcValue);
        return $this->calculation->calculate($firstResult, $this->secondCalcValue);
    }
}