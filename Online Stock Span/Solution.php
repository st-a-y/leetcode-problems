<?php

/**
 * @see https://leetcode.com/problems/online-stock-span/
 */
class StockSpanner {
    protected $history;

    /**
     */
    function __construct() {
        $this->span = 0;
        $this->history = [];
    }
  
    /**
     * @param Integer $price
     * @return Integer
     */
    function next($price) {
        $res = 1;
        for ($i = count($this->history) - 1; $i >= 0;) {
            if ($this->history[$i][0] > $price) {
                break;
            }
            $res += $this->history[$i][1];
            $i -= $this->history[$i][1];
            printf("%d\n", $i);
        }
        $this->history[] = [$price, $res];
        return $res;
    }
}

/**
 * Your StockSpanner object will be instantiated and called as such:
 * $obj = StockSpanner();
 * $ret_1 = $obj->next($price);
 */