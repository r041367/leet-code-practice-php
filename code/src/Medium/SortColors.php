<?php


namespace R041367\LeetCodePracticePhp\Medium;

/**
 * 75. Sort Colors
 * https://leetcode.com/problems/sort-colors/
 *
 * Given an array nums with n objects colored red, white, or blue, sort them in-place so that objects of the same color are adjacent, with the colors in the order red, white, and blue.
 * We will use the integers 0, 1, and 2 to represent the color red, white, and blue, respectively.
 * You must solve this problem without using the library's sort function.
 *
 * Constraints:
 * n == nums.length
 * 1 <= n <= 300
 * nums[i] is 0, 1, or 2
 *
 * Class SortColors
 * @package R041367\LeetCodePracticePhp\Medium
 */
class SortColors
{
    public function sortColors(&$nums): void
    {
        $length = count($nums);
        if ($length === 1) {
            return;
        }

        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length - 1; $j++) {
                if ($nums[$j] > $nums[$j + 1]) {
                    [$nums[$j + 1], $nums[$j]] = [$nums[$j], $nums[$j + 1]];
                }
            }
        }
    }
}
