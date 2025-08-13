<?php

use PHPUnit\Framework\TestCase;

class DiagonalDifferenceTest extends TestCase
{
    public function testExample(): void
    {
        require_once __DIR__ . '/../hackerrank/week1/day2/DiagonalDifference.php';
        $arr = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];
        $this->assertSame(0, diagonalDifference($arr));
    }
}

