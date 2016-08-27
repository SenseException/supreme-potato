<?php

namespace Budgegeria\SupremePotato\Exception;

class CalculationArgument extends \Exception
{
    public static function shouldNotBeZero()
    {
        return new self('Second argument is not allowed to be 0.');
    }
}