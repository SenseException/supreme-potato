<?php

namespace Budgegeria\SupremePotato\Tests;

use Budgegeria\SupremePotato\Calculation;
use Budgegeria\SupremePotato\Divide;
use Budgegeria\SupremePotato\MultipleCalculation;
use function bovigo\assert\{assert, predicate\isSameAs};

use bovigo\callmap\NewInstance;
use function bovigo\callmap\verify;

class MultipleCalculationWithCallmap
{
    /**
     * @test
     */
    public function integration()
    {
        $calc = new MultipleCalculation(new Divide());

        assert($calc->calc(2), isSameAs(1.0));
    }

    /**
     * Check if test fails when "equals()" argument or "verify()" is changed
     *
     * @test
     */
    public function withCallmapMock()
    {
        $calculation = NewInstance::of(Calculation::class)
            ->returns([
                'calculate' => 1
            ]);

        $calc = new MultipleCalculation($calculation);

        assert($calc->calc(2), isSameAs(1.0));

        verify($calculation, 'calculate')
            ->wasCalled(2);
        verify($calculation, 'calculate')
            ->receivedOn(1, 2, 1);
        verify($calculation, 'calculate')
            ->receivedOn(2, 1, 2);
    }
}