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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
		$current = null;
		$head = null;

		if (!$list1) return $list2;
		if (!$list2) return $list1;

		if ($list1->val < $list2->val) {
			$head = $list1;
			$list1 = $list1->next;
		} else {
			$head = $list2;
            $list2 = $list2->next;
		}
        $current = $head;

		while ($current) {
			if (!$list1 || !$list2) {
                $current->next = $list1 ?? $list2;
				break;
			}
			if ($list1->val < $list2->val) {
				$current->next = $list1;
				$list1 = $list1->next;
			} else {
				$current->next = $list2;
                $list2 = $list2->next;
			}
            $current = $current->next;
		}

		return $head;
    }
}
