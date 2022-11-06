<?php

//https://leetcode.com/problems/orderly-queue/

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function orderlyQueue($s, $k) {
        if ($k > 1) {
            $arr = str_split($s);
            sort($arr);
            return implode('', $arr);
        }
        $best = $s;
        for ($i = strlen($s); $i > 0; $i--) {
            $s = substr($s, 1) . $s[0];
            $best = min($best, $s);
        }
        return $best;
    }
}
