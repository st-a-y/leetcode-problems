<?php

/**
 * @see https://leetcode.com/problems/guess-number-higher-or-lower/
 *  
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $left = 1;
        $right = $n;
        while ($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            $res = $this->guess($mid);
            if ($res == 0) return $mid;
            if ($res > 0) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return 0;
    }
}