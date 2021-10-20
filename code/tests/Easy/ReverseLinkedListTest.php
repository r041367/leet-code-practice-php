<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\ListNode;
use R041367\LeetCodePracticePhp\Easy\ReverseLinkedList;

class ReverseLinkedListTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  array  $head
     * @param  array  $expected
     */
    public function test_ReverseList_WithDataProvider_AllPass(array $head, array $expected): void
    {
        $head = $this->convertListNode($head);

        $actual = (new ReverseLinkedList())->reverseList($head);

        self::assertEquals($expected, $this->convertToArray($actual));
    }

    public function dataProvider(): array
    {
        return [
            'n1' => [[], []],
            'n2' => [[0], [0]],
            'n3' => [[1, 2], [2, 1]],
            'n4' => [[1, 2, 3, 4, 5], [5, 4, 3, 2, 1]],
        ];
    }

    private function convertListNode(array $nums): ListNode
    {
        if (count($nums) === 0) {
            return new ListNode(null, null);
        }

        $nums = array_reverse($nums);

        $node = null;
        foreach ($nums as $i => $iValue) {
            if ($i === 0) {
                $node = null;
            }

            $num = $iValue;
            $node = new ListNode($num, $node);
        }

        return $node;
    }

    private function convertToArray(ListNode $actual): array
    {
        $re = [];
        while ($actual->val !== null) {
            $re[] = $actual->val;
            $actual = $actual->next;
        }
        return $re;
    }
}
