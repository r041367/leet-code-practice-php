<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\UglyNumber;

class UglyNumberTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  int  $num
     * @param  bool  $expected
     */
    public function test_Run_WithDataProvider_AllPass(int $num, bool $expected): void
    {
        $actual = (new UglyNumber())->isUgly($num);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            'n0' => [0, false], // special case
            'n1' => [1, true], // special case
            'n6' => [6, true],
            'n8' => [8, true],
            'n14' => [14, false],
            'n15' => [15, true],
            'n17' => [17, false],
            'n100' => [100, true],
        ];
    }
}
