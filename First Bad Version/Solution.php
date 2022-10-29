<?php

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {

    protected $apiCalls = [];

    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $l = 1;

        while ($l <= $n) {
            $mid = (int)(($l + $n) / 2);
            $isBad = $this->callApi($mid);
            if ($isBad && !$this->callApi($mid - 1)) {
                return $mid;
            } else if ($isBad) {
                $n = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }

        return 1;
    }

    protected function callApi($n) {
        if ($n < 1) return false;
        if (!array_key_exists($n, $this->apiCalls)) {
            $this->apiCalls[$n] = $this->isBadVersion($n);
        }
        return $this->apiCalls[$n];
    }
}