<?php

/**
 * @see https://leetcode.com/problems/most-stones-removed-with-same-row-or-column/
 */
class Node {
    public $cols;
    public $rows;

    public function __construct($x, $y) {
        $this->cols['_'.$x] = true;
        $this->rows['_'.$y] = true;
    }

    public function addChild($node) {
        $this->cols = array_merge($this->cols, $node->cols);
        $this->rows = array_merge($this->rows, $node->rows);
    }
}

class Solution {

    /**
     * @param Integer[][] $stones
     * @return Integer
     */
    function removeStones($stones) {
        $nodes = [];
        foreach ($stones as $stone) {
            $nodes[] = new Node($stone[0], $stone[1]);
        }
        for ($i = count($nodes) - 1; $i > 0; $i--) {
            for ($j = $i - 1; $j >= 0; $j--) {
                if (array_intersect_key($nodes[$i]->cols, $nodes[$j]->cols) || array_intersect_key($nodes[$i]->rows, $nodes[$j]->rows)) {
                    $nodes[$j]->addChild($nodes[$i]);
                    unset($nodes[$i]);
                    continue 2;
                }
            }
        }
        var_dump($nodes);
        return count($stones) - count($nodes);
    }
}
