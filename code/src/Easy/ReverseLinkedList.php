<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 206. Reverse Linked List
 * https://leetcode.com/problems/reverse-linked-list/
 *
 * Given the head of a singly linked list, reverse the list, and return the reversed list.
 *
 * Constraints:
 * The number of nodes in the list is the range [0, 5000].
 * -5000 <= Node.val <= 5000
 *
 * Class ReverseLinkedList
 * @package R041367\LeetCodePracticePhp\Easy
 */
class ReverseLinkedList
{
    /**
     * @param  ListNode  $head
     * @return ListNode
     */
    function reverseList($head)
    {
        $prev = null;
        $curr = $head;
        while ($curr !== null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }

        return $prev;
    }
}
