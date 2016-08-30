<?php

namespace Budgegeria\SupremePotato\Tests;

class Assert
{
    /**
     * @test
     */
    public function webmozartAssert()
    {
        \Webmozart\Assert\Assert::true(true);
    }

    /**
     * @test
     */
    public function beberleiAssert()
    {
        \Assert\Assertion::true(true);
    }

    /**
     * @test
     */
    public function phpunitAssert()
    {
        \PHPUnit_Framework_Assert::assertTrue(true);
    }

    /**
     * @test
     */
    public function hamcrestAssert()
    {
        \Hamcrest\MatcherAssert::assertThat(true, \Hamcrest\Matchers::identicalTo(true));
    }
}