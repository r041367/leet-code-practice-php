<?php

namespace Tests\Medium;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Medium\SortColors;

class SortColorsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  string[]  $nums
     */
    public function test_SortColors_WithDataProvider_AllPass(array $nums, array $expected): void
    {
        (new SortColors())->sortColors($nums);

        self::assertEquals($expected, $nums);
    }

    public function dataProvider(): array
    {
        return [
            '[0]' => [[0], [0]],
            '[1]' => [[1], [1]],
            '[2,0,1]' => [[2, 0, 1], [0, 1, 2]],
            '[2,0,2,1,1,0]' => [[2, 0, 2, 1, 1, 0], [0, 0, 1, 1, 2, 2]],
        ];
    }
}
