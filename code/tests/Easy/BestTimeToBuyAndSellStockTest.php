<?php

namespace Tests\Easy;

use PHPUnit\Framework\TestCase;
use R041367\LeetCodePracticePhp\Easy\BestTimeToBuyAndSellStock;

class BestTimeToBuyAndSellStockTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param  array  $prices
     * @param  int  $expected
     */
    public function test_Run_WithDataProvider_AllPass(array $prices, int $expected): void
    {
        $actual = (new BestTimeToBuyAndSellStock())->maxProfit($prices);

        self::assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            '[7]' => [[7], 0],
            '[1,2]' => [[1, 2], 1],
            '[1,2,3]' => [[1, 2, 3], 2],
            '[3,1]' => [[3, 1], 0],
            '[3,2,1]' => [[3, 2, 1], 0],
            '[3,1,2]' => [[3, 1, 2], 1],
        ];
    }
}
