<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\SumOfUniqueElements;

class SumOfUniqueElementsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  array  $nums
     * @param  int  $expected
     */
    public function test_IsUgly_WithDataProvider_AllPass(array $nums, int $expected): void
    {
        $actual = (new SumOfUniqueElements())->sumOfUnique($nums);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            '[1]' => [[1], 1],
            '[1,2,3,2]' => [[1, 2, 3, 2], 4],
            '[1,1,1,1,1]' => [[1, 1, 1, 1, 1], 0],
            '[1,2,3,4,5]' => [[1, 2, 3, 4, 5], 15],
        ];
    }
}
