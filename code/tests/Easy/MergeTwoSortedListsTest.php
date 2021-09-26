<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\ListNode;
use R041367\LeetCodePracticePhp\Easy\MergeTwoSortedLists;

class MergeTwoSortedListsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  array  $l1
     * @param  array  $l2
     * @param  array  $expected
     */
    public function test_MergeTwoLists_WithDataProvider_AllPass(array $l1, array $l2, array $expected): void
    {
        $l1 = $this->convertListNode($l1);
        $l2 = $this->convertListNode($l2);

        $actual = (new MergeTwoSortedLists())->mergeTwoLists($l1, $l2);

        self::assertEquals($expected, $this->convertToArray($actual));
    }

    public function dataProvider(): array
    {
        return [
            'n1' => [[], [], []],
            'n2' => [[], [0], [0]],
            'n3' => [[1, 2], [0], [0, 1, 2]],
            'n4' => [[1, 2, 4], [1, 3, 4], [1, 1, 2, 3, 4, 4]],
            'n5' => [[1, 2, 3, 4], [2, 3], [1, 2, 2, 3, 3, 4]],
            'n6' => [[1, 2], [3, 4], [1, 2, 3, 4]],
            'n7' => [[1, 4], [2, 3], [1, 2, 3, 4]],
            'n8' => [[1, 3], [2, 4], [1, 2, 3, 4]],
            'n9' => [[3, 4], [1, 2], [1, 2, 3, 4]],
            'n10' => [[-9, 3], [5, 7], [-9, 3, 5, 7]],
        ];
    }

    private function convertListNode(array $nums): ListNode
    {
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
