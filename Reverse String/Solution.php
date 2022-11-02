<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $len = count($s);
        $mid = $len / 2;
        for ($i = 0; $i < $mid; $i++) {
            $tmp = $s[$i];
            $s[$i] = $s[$len - $i - 1];
            $s[$len - $i - 1] = $tmp;
        }
    }
}