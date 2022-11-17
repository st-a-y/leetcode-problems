<?php

/**
 * @see https://leetcode.com/problems/rectangle-area/
 */
class Solution {

    /**
     * @param Integer $ax1
     * @param Integer $ay1
     * @param Integer $ax2
     * @param Integer $ay2
     * @param Integer $bx1
     * @param Integer $by1
     * @param Integer $bx2
     * @param Integer $by2
     * @return Integer
     */
    function computeArea($ax1, $ay1, $ax2, $ay2, $bx1, $by1, $bx2, $by2) {
        $len = min($ax2, $bx2) - max($ax1, $bx1);
        $height = min($ay2, $by2) - max($ay1, $by1);
        $intersect = 0;
        if ($len > 0 && $height > 0) {
            $intersect = max(0, $len * $height);
        }
        $s1 = abs($ax2 - $ax1) * abs($ay2 - $ay1);
        $s2 = abs($bx2 - $bx1) * abs($by2 - $by1);
        return $s1 + $s2 - $intersect;
    }
}