<?php
// @see https://leetcode.com/problems/longest-palindrome-by-concatenating-two-letter-words/
class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function longestPalindrome($words) {
        $dict = [];
        foreach ($words as $word) {
            if (!array_key_exists($word, $dict)) {
                $dict[$word] = 0;
            }
            $dict[$word] += 1;
        }
        $res = 0;
        $addMiddle = 0;
        foreach ($dict as $word => $count) {
            $mirror = strrev($word);
            if ($word == $mirror) {
                $res += (int)($count / 2) * 4;
                if ($count % 2) {
                    $addMiddle = 2;
                }
            } else if (array_key_exists($mirror, $dict)) {
                $times = min($dict[$word], $dict[$mirror]);
                $dict[$word] -= $times;
                $dict[$mirror] -= $times;
                $res += $times * 4;
            }
        }
        return $res + $addMiddle;
    }
}