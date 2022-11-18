<?php
// @see https://leetcode.com/problems/make-the-string-great/

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function makeGood($s) {
        $isGood = false;
        while (!$isGood) {
            for ($i = 1; $i < strlen($s); $i++) {
                if ($s[$i] != $s[$i - 1] && strtolower($s[$i]) == strtolower($s[$i - 1])) {
                    $s = str_replace($s[$i - 1] . $s[$i], '', $s);
                    continue 2;
                }
            }
            $isGood = true;
        }
        return $s;
    }
}