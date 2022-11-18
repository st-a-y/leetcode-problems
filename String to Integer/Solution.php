<?php

/**
 * @see https://leetcode.com/problems/string-to-integer-atoi/
 */
class Solution {
    const MAX = 2147483647;
    const MIN = -2147483648;
    
    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        preg_match('/^[ ]*(?<num>[+-]{0,1}\d+)/', $s, $matches);
        $res = (float)$matches['num'];
        if ($res > self::MAX) return self::MAX;
        if ($res < self::MIN) return self::MIN;
        return (int)$res;
    }
}