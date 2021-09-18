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
            'a' => ["abcabcbb", 3],
            'b' => ["bbbbb", 1],
            'c' => ["pwwkew", 3],
            'd' => ["", 0],
            'e' => [" ", 1],
        ];
    }
}
