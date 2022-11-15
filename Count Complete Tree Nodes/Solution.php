<?php

/**
 * @see https://leetcode.com/problems/count-complete-tree-nodes/
 *
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function countNodes($root) {
        if (!$root) return 0;

        $left = 0;
        $right = 0;
        $iter = $root;
        while ($iter->left) {
            $left++;
            $iter = $iter->left;
        }
        $iter = $root;
        while ($iter->right) {
            $right++;
            $iter = $iter->right;
        }       

        if ($left == $right) return 2 * (pow(2, $left) - 1) + 1;

        return 2 * (pow(2, $right) - 1) + 1 + $this->countLeaves($root, 0, $left);
    }

    function countLeaves($node, $level, $target) {
        if ($node == null) return 0;
        if ($level == $target) return 1;
        
        return $this->countLeaves($node->left, $level + 1, $target) + $this->countLeaves($node->right, $level + 1, $target);
    }
}