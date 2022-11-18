<?php

/**
 * @see https://leetcode.com/problems/ugly-number/
 */
class Solution {

    /**
     * @param int $n
     * @return Boolean
     */
    function isUgly($n) {
        if ($n <= 0) {
            return false;
        }
        $primes = [2, 3, 5];
        while ($n > 1) {
            foreach ($primes as $prime) {
                if (($n % $prime) == 0) {
                    $n /= $prime;
                    if ($n == 1) {
                        break 2;
                    }
                    continue 2;
                }
            }
            return false;
        }
        return true;
    }
}
