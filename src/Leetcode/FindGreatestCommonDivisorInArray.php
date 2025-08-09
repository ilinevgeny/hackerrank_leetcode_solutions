<?php

namespace App\Leetcode;
class FindGreatestCommonDivisorInArray
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findGCD(array $nums): int
    {
        $gcd = 1;
        $min = min($nums);
        $max = max($nums);
        for ($i = $gcd; $i <= $max; $i++) {
            if ($min % $i === 0 && $max % $i === 0) {
                $gcd = $i;
            }
        }
        return $gcd;
    }

}