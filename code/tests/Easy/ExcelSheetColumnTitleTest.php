<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\ExcelSheetColumnTitle;

class ExcelSheetColumnTitleTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  int  $columnNumber
     * @param  string  $expected
     */
    public function test_Run_WithDataProvider_AllPass(int $columnNumber, string $expected): void
    {
        $actual = (new ExcelSheetColumnTitle())->convertToTitle($columnNumber);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            'A,1' => [1, 'A'],
            'Z,26' => [26, 'Z'],
            'AB,28' => [28, 'AB'],
            'AN,40' => [40, 'AN'],
            'AZ,52' => [52, 'AZ'],
            'BA,53' => [53, 'BA'],
            'ZY,701' => [701, 'ZY'],
            'FXSHRXW,2147483647' => [2147483647, 'FXSHRXW'],
        ];
    }
}
