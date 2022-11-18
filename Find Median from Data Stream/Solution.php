<?php

/**
 * @see https://leetcode.com/problems/find-median-from-data-stream/
 */
class MedianFinder {
    /** @var SplMinHeap */
    private $minHeap;
    /** @var SplMaxHeap */
    private $maxHeap;

    /**
     */
    function __construct() {
        $this->minHeap = new SplMinHeap();
        $this->maxHeap = new SplMaxHeap();
    }
  
    /**
     * @param Integer $num
     * @return NULL
     */
    function addNum($num) {
        if ($this->minHeap->count() > $this->maxHeap->count()) {
            $this->maxHeap->insert($num);
        } else {
            $this->minHeap->insert($num);
        }
        
        if ($this->minHeap->count() && $this->maxHeap->count() && $this->minHeap->top() < $this->maxHeap->top()) {
            $this->maxHeap->insert($this->minHeap->extract());
            $this->minHeap->insert($this->maxHeap->extract());
        }
    }
  
    /**
     * @return Float
     */
    function findMedian() {
        if ($this->minHeap->count() == $this->maxHeap->count()) {
            return ($this->minHeap->top() + $this->maxHeap->top()) / 2;
        }

        if ($this->minHeap->count() > $this->maxHeap->count()) {
            return $this->minHeap->top();
        }
        
        return $this->maxHeap->top();
    }
}

/**
 * Your MedianFinder object will be instantiated and called as such:
 * $obj = MedianFinder();
 * $obj->addNum($num);
 * $ret_2 = $obj->findMedian();
 */