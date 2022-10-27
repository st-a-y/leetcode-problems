<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $prev = null;
        $count = 0;
        $res = [];
        foreach ($nums as $item) {
            if ($prev !== $item) {
                $res[] = $item;
                $count++;
            }
            $prev = $item;
        }
        $nums = $res;
        return $count;
    }
}
