<?php
// @see https://leetcode.com/problems/maximum-69-number/

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
        $s = (string)$num;
        $pos = strpos($s, '6');
        if ($pos !== false) {
            $s[$pos] = '9';
        }
        return (int)$s;
    }
}