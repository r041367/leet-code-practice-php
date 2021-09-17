<?php

namespace Tests\Medium;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Medium\SubsetsII;

class SubsetsIITest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  string[]  $nums
     */
    public function test_WithDataProvider_AllPass(array $nums, array $expected): void
    {
        $actual = SubsetsII::run($nums);

        self::assertTrue($this->isAnswerEqual($expected, $actual));
    }

    /** @noinspection JsonEncodingApiUsageInspection */
    private function isAnswerEqual($answer, $actual): bool
    {
        $answers = [];

        foreach ($answer as $item) {
            sort($item);
            $answers[json_encode($item)] = true;
        }

        foreach ($actual as $item) {
            sort($item);
            unset($answers[json_encode($item)]);
        }

        return count($answers) === 0;
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3], [[], [1], [1, 2], [1, 2, 3], [1, 3], [2], [2, 3], [3]]],
            [[1, 2, 2], [[], [1], [1, 2], [1, 2, 2], [2], [2, 2]]],
            [[1, 2, 2, 3], [[], [1], [1, 2], [1, 2, 2], [1, 2, 2, 3], [1, 2, 3], [1, 3], [2], [2, 2], [2, 2, 3], [2, 3], [3]]],
            [[2, 1, 2, 1, 3], [[], [1], [1, 1], [1, 1, 2], [1, 1, 2, 2], [1, 1, 2, 2, 3], [1, 1, 2, 3], [1, 1, 3], [1, 2], [1, 2, 2], [1, 2, 2, 3], [1, 2, 3], [1, 3], [2], [2, 2], [2, 2, 3], [2, 3], [3]]],
            [[0], [[], [0]]],
        ];
    }
}
