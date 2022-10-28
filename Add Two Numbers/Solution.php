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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $reminder = 0;
        $res = $current = new ListNode(0);
        while ($l1 || $l2 || $reminder) {
            $sum = ($l1 ? $l1->val : 0) + ($l2 ? $l2->val : 0) + $reminder;
            $reminder = intdiv($sum, 10);
            $current->next = new ListNode($sum % 10);
            $current = $current->next;
            $l1 = $l1?->next;
            $l2 = $l2?->next;
        }
        return $res->next;
    }
}