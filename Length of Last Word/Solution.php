<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $a = explode(' ', trim($s));
        return strlen($a[count($a) - 1]);
    }
}
