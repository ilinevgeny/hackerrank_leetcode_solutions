<?php

use PHPUnit\Framework\TestCase;
use App\Leetcode\FindGreatestCommonDivisorInArray;

class FindGreatestCommonDivisorInArrayTest extends TestCase
{
    public function testFindGCDReturnsCorrectValue(): void
    {
        $solver = new FindGreatestCommonDivisorInArray();
        $this->assertSame(6, $solver->findGCD([6, 12, 18]));
        $this->assertSame(1, $solver->findGCD([7, 13, 19]));
        $this->assertSame(5, $solver->findGCD([5, 10, 15]));
        $this->assertSame(3, $solver->findGCD([6, 7, 9]));
        $this->assertSame(2, $solver->findGCD([2, 4, 6, 8]));
    }

    public function testFindGCDWithSingleElement(): void
    {
        $solver = new FindGreatestCommonDivisorInArray();
        $this->assertSame(7, $solver->findGCD([7]));
    }

    public function testFindGCDWithMinMax(): void
    {
        $solver = new FindGreatestCommonDivisorInArray();
        $this->assertSame(2, $solver->findGCD([2, 100]));
    }
}

