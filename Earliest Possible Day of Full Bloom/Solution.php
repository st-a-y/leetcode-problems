<?php

class Solution {

    /**
     * @param Integer[] $plantTime
     * @param Integer[] $growTime
     * @return Integer
     */
    function earliestFullBloom($plantTime, $growTime) {
        $pTime = 0;
        $result = 0;
        arsort($growTime);
        $indices = array_keys($growTime);
        foreach ($indices as $i) {
            $pTime += $plantTime[$i];
            $result = max($result, $pTime + $growTime[$i]);
        }
        return $result;
    }
}