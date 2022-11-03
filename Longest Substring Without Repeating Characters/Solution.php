<?php
// https://leetcode.com/problems/longest-substring-without-repeating-characters/

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $start = 0;
        $len = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $substr = str_split(substr($s, $start, $len + 1));
            if (count(array_unique($substr)) == count($substr)) {
                $len += 1;
            } else {
                $start += 1;
            }
        }
        return $len;
    }
}