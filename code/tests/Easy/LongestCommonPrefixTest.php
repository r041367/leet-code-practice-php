<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\LongestCommonPrefix;

class LongestCommonPrefixTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  string[]  $strings
     */
    public function test_Run_WithDataProvider_AllPass(array $strings, string $expected): void
    {
        $actual = LongestCommonPrefix::run($strings);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            'a' => [['flower', 'flow', 'flight'], 'fl'],
            'b' => [['dog', 'racecar', 'car'], ''],
            'c' => [['dog'], 'dog'],
        ];
    }
}
