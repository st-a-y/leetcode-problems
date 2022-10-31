<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @param Integer $k
     * @return Integer
     */
    function shortestPath($grid, $k) {
        $m = count($grid);
        $n = count($grid[0]);

        $q = [[0, 0, $k, 0]];
        $seen = [];
        while ($q) {
            list($x, $y, $left, $steps) = array_shift($q);
            if (array_key_exists(sprintf('%d,%d,%d', $x, $y, $left), $seen) || $left < 0) {
                continue;
            }
            if ($x == $m - 1 && $y == $n - 1) {
                return $steps;
            }
            $seen[sprintf('%d,%d,%d', $x, $y, $left)] = 1;
            if ($grid[$x][$y] == 1) {
                $left -= 1;
            }
            foreach ([[1, 0], [-1, 0], [0, 1], [0, -1]] as $val) {
                $newX = $val[0] + $x;
                $newY = $val[1] + $y;
                if ($newX < $m && $newX >= 0 && $newY >= 0 && $newY < $n) {
                    $q[] = [$newX, $newY, $left, $steps + 1];
                }
            }
        }
        return -1;
    }
}
