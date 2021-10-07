<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 1748. Sum of Unique Elements
 * https://leetcode.com/problems/sum-of-unique-elements/
 *
 * You are given an integer array nums. The unique elements of an array are the elements that appear exactly once in the array.
 * Return the sum of all the unique elements of nums.
 *
 * Constraints:
 * 1 <= nums.length <= 100
 * 1 <= nums[i] <= 100
 *
 * Class UglyNumber
 * @package R041367\LeetCodePracticePhp\Easy
 */
class SumOfUniqueElements
{
    public function sumOfUnique(array $nums): bool
    {
        $length = count($nums);
        if ($length === 1) {
            return $nums[0];
        }

        $map = [];
        $sum = 0;
        foreach ($nums as $num) {
            if (!isset($map[$num])) {
                $sum += $num;
                $map[$num] = 1;
            } else {
                $map[$num]++;
                if ($map[$num] === 2) {
                    $sum -= $num;
                }
            }
        }
        return $sum;
    }
}
