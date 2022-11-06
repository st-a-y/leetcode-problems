<?php
// @see https://leetcode.com/problems/array-nesting/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arrayNesting($nums) {
        $n = count($nums);
        $mid = $n / 2;
        $max = 1;
        for ($i = 0; $i < $n; $i++) {
            $len = 0;
            $pos = $i;
            while ($nums[$pos] != $pos) {
                $len++;
                $tmp = $nums[$pos];
                $nums[$pos] = $pos;
                $pos = $tmp;
            }
            $max = max($max, $len);
            if ($max >= $mid) {
                break;
            }
        }
        return $max;
    }
}