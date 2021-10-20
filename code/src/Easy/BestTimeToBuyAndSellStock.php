<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 121. Best Time to Buy and Sell Stock
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock/
 *
 * You are given an array prices where prices[i] is the price of a given stock on the i-th day.
 * You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
 * Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.
 *
 * Constraints:
 * 1 <= prices.length <= 10^5
 * 0 <= prices[i] <= 10^4
 *
 * Class BestTimeToBuyAndSellStock
 * @package R041367\LeetCodePracticePhp\Easy
 */
class BestTimeToBuyAndSellStock
{
    function maxProfit($prices)
    {
        $profit = 0;
        $minPrice = 10000;
        foreach ($prices as $price) {
            if ($minPrice > $price) {
                $minPrice = $price;
            }

            $tempProfit = $price - $minPrice;
            if ($tempProfit > $profit) {
                $profit = $tempProfit;
            }
        }
        return $profit;
    }
}
