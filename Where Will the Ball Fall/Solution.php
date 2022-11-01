<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer[]
     */
    function findBall($grid) {
        $m = count($grid);
        $n = count($grid[0]);

        $res = range(0, $n - 1);
        for ($i = 0; $i < $m; $i++) {
            foreach ($res as &$ball) {
                if ($ball == -1) continue;
                if ($grid[$i][$ball] > 0) {
                    $ball += 1;
                    if ($ball >= $n || $grid[$i][$ball] == -1) {
						$ball = -1;
					}
                } else {
                    $ball -= 1;
                    if ($grid[$i][$ball] == 1) {
						$ball = -1;
					}
                }
            }
            unset($ball);
        }
        return $res;
    }
}