<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 21. Merge Two Sorted Lists
 * https://leetcode.com/problems/merge-two-sorted-lists/
 *
 * Merge two sorted linked lists and return it as a sorted list. The list should be made by splicing together the nodes of the first two lists.
 *
 * Constraints:
 * The number of nodes in both lists is in the range [0, 50].
 * -100 <= Node.val <= 100
 * Both l1 and l2 are sorted in non-decreasing order.
 *
 * Class MergeTwoSortedLists
 * @package R041367\LeetCodePracticePhp\Easy
 */
class MergeTwoSortedLists
{
    /**
     * @param  ListNode  $l1
     * @param  ListNode  $l2
     * @return ListNode
     */
    public function mergeTwoLists($l1, $l2)
    {
        if ($l1->val === null && $l2->val !== null) {
            return $l2;
        }

        if ($l2->val === null && $l1->val !== null) {
            return $l1;
        }

        if ($l1->val === null && $l2->val === null) {
            return new ListNode(null, null);
        }

        $o = new ListNode(null);
        $prev = $o;

        while ($l1->val !== null && $l2->val !== null) {
            if ($l1->val <= $l2->val) {
                $prev->next = $l1;
                $l1 = $l1->next;
            } else {
                $prev->next = $l2;
                $l2 = $l2->next;
            }
            $prev = $prev->next;
        }

        if ($l1->val === null) {
            $prev->next = $l2;
        } elseif ($l2->val === null) {
            $prev->next = $l1;
        }

        return $o->next;
    }
}
