<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $k = $k % count($nums);
        array_unshift($nums, ...array_splice($nums, -$k));
    }
}