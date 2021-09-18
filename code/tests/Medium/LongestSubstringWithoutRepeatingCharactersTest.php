<?php

namespace Tests\Medium;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Medium\LongestSubstringWithoutRepeatingCharacters;

class LongestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  string  $string
     * @param  int  $expected
     */
    public function test_Run_WithDataProvider_AllPass(string $string, int $expected): void
    {
        $actual = LongestSubstringWithoutRepeatingCharacters::run($string);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            ["abcabcbb", 3],
            ["bbbbb", 1],
            ["pwwkew", 3],
            ["", 0],
            [" ", 1],
        ];
    }
}
