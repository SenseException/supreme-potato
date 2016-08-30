<?php

namespace Budgegeria\SupremePotato\Tests;

use Budgegeria\SupremePotato\Calculation;
use Budgegeria\SupremePotato\MultipleCalculation;
use Prophecy\Prophet;

use PHPUnit_Framework_Assert;

class MultipleCalculationWithProphecy
{
    /**
     * @test
     */
    public function withProphecyMock()
    {
        $prophet = new Prophet();

        $calculation = $prophet->prophesize(Calculation::class);
        $calculation->calculate(2, 1)->willReturn(1)->shouldBeCalled();
        $calculation->calculate(1, 2)->willReturn(1)->shouldBeCalled();

        $calc = new MultipleCalculation($calculation->reveal());

        PHPUnit_Framework_Assert::assertSame($calc->calc(2), 1.0);

        $prophet->checkPredictions();
    }
}