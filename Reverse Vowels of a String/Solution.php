<?php
// @see https://leetcode.com/problems/reverse-vowels-of-a-string/

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $l = strlen($s) - 1;
        for ($i = 0; $l > $i; $i++) {
            while ($l > 0 && !in_array(strtolower($s[$l]), ['a', 'e', 'i', 'o', 'u'])) {
                $l--;
            }
            if (in_array(strtolower($s[$i]), ['a', 'e', 'i', 'o', 'u'])) {
                $tmp = $s[$i];
                $s[$i] = $s[$l];
                $s[$l] = $tmp;
                $l--;
            }
        }
        return $s;
    }
}