<?php

class Solution {

    /**
     * @param Integer[][] $img1
     * @param Integer[][] $img2
     * @return Integer
     */
    function largestOverlap($img1, $img2) {
        $n = count($img1);
        $res = 0;
        $calcOverlap = function ($offsetX, $offsetY) use ($img1, $img2, $n) {
            foreach (range(0, $n) as $i) {
                foreach (range(0, $n) as $j) {
                    if ($i + $offsetX >= 0 && $i + $offsetX < $n && $j + $offsetY >= 0 && $j + $offsetY < $n && $img1[$i + $offsetX][$j + $offsetY] && $img2[$i][$j]) {
                        $res++;
                    }
                }
            }
            return $res;
        };

        $answers = [];
        foreach (range(-$n, $n) as $i) {
            foreach (range(-$n, $n) as $j) {
                $answers[] = $calcOverlap($i, $j);
            }
        }
        return max($answers);
    }
}