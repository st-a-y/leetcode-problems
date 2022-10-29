<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $result = [];
        $tmp = [];
        $hold = null;

        foreach ($nums as $num) {
            if ($num < 0) {
                $hold = -$num;
                $tmp[] = $hold;
                continue;
            }
            while ($hold && $hold < $num) {
                $result[] = pow(array_pop($tmp), 2);
                $hold = end($tmp);
            }
            $result[] = pow($num, 2);
        }
        while ($tmp) {
            $result[] = pow(array_pop($tmp), 2);
        }
        return $result;
    }
}