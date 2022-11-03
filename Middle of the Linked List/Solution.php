<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $i = 0;
        $res = $head;
        while($head->next) {
            if ($i % 2 == 0) {
                $res = $res->next;
            }
            $head = $head->next;
            $i++;
        }
        return $res;
    }
}