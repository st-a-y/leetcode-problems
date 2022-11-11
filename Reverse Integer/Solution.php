<?php

/**
 * @see https://leetcode.com/problems/reverse-integer/
 */
class Solution {
    const MAX = 2147483647;
    const MIN = -2147483648;

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $res = 0;
        while($x) {
            $res = $res * 10 + ($x % 10);
            $x = (int)($x / 10);
            if (self::MAX - $x < $res || self::MIN - $x > $res) {
                return 0;
            }
        }
        return $res;
    }
}