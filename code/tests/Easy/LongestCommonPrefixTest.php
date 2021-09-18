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
    public function test_LongestCommonPrefix_WithDataProvider_AllPass(array $strings, string $expected): void
    {
        $actual = (new LongestCommonPrefix())->longestCommonPrefix($strings);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            "['flower', 'flow', 'flight']" => [['flower', 'flow', 'flight'], 'fl'],
            "['dog', 'racecar', 'car']" => [['dog', 'racecar', 'car'], ''],
            "['dog']" => [['dog'], 'dog'],
        ];
    }
}
