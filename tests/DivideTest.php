<?php

namespace Budgegeria\SupremePotato\Tests;

use function bovigo\assert\{assert as bovigo_assert, predicate\equals};
use Budgegeria\SupremePotato\Divide;

class DivideTest
{
    /**
     * @var \Budgegeria\SupremePotato\Divide
     */
    private $divide;

    public function setup()
    {
        $this->divide = new Divide();
    }

    /**
     * @test
     */
    public function calculate()
    {
        bovigo_assert($this->divide->calculate(4, 2), equals(2));
        bovigo_assert($this->divide->calculate(4.9, 2.3), equals(2));
        bovigo_assert($this->divide->calculate(4, 4), equals(1));
    }
}