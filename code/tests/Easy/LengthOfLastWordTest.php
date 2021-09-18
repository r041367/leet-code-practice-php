<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\LengthOfLastWord;

class LengthOfLastWordTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  string  $s
     * @param  int  $expected
     */
    public function test_Run_WithDataProvider_AllPass(string $s, int $expected): void
    {
        $actual = LengthOfLastWord::run($s);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            ['Hello World', 5],
            ['   fly me   to   the moon  ', 4],
            ['luffy is still joyboy', 6],
        ];
    }
}
