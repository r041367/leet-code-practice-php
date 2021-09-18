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
    public function test_LengthOfLongestSubstring_WithDataProvider_AllPass(string $string, int $expected): void
    {
        $actual = (new LongestSubstringWithoutRepeatingCharacters())->lengthOfLongestSubstring($string);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            'abcabcbb' => ['abcabcbb', 3],
            'bbbbbb' => ['bbbbb', 1],
            'pwwkewc' => ['pwwkew', 3],
            '' => ['', 0],
            ' ' => [' ', 1],
        ];
    }
}
