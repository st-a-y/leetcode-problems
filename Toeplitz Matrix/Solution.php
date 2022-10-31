<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function isToeplitzMatrix($matrix) {
        $m = count($matrix);
        $n = count($matrix[0]);
        $prev = implode(',', array_slice($matrix[0], 0, $n - 1));
        for ($i = 1; $i < $m; $i++) {
            $current = implode(',', array_slice($matrix[$i], 1));
            if ($current != $prev) {
                return false;
            }
            $prev = implode(',', array_slice($matrix[$i], 0, $n - 1));
        }
        return true;
    }
}
