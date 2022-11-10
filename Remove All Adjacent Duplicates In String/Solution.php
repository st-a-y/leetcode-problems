<?php

/**
 * @see https://leetcode.com/problems/remove-all-adjacent-duplicates-in-string/
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        for ($i = 1; $i < strlen($s); $i++) {
            if ($s[$i] == $s[$i - 1]) {
                $s = str_replace($s[$i - 1] . $s[$i], '', $s);
                $i = max(0, $i - 2);
            }
        }
        return $s;
    }
}