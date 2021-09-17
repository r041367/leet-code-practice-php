<?php


namespace R041367\LeetCodePracticePhp\Medium;

/**
 * 90. Subsets II
 * https://leetcode.com/problems/subsets-ii/
 *
 * Given an integer array nums that may contain duplicates, return all possible subsets (the power set).
 * The solution set must not contain duplicate subsets. Return the solution in any order..
 *
 * Constraints:
 * 1 <= nums.length <= 10
 * -10 <= nums[i] <= 10
 *
 * Class SubsetsII
 * @package R041367\LeetCodePracticePhp\Medium
 */
class SubsetsII
{
    public static function run(array $nums): array
    {
        $length = count($nums);

        $max = 2 ** $length;

        $switch = [];
        for ($i = 1; $i < $max; $i++) {
            $switch[] = sprintf('%0'.$length.'d', decbin($i));
        }

        $solution = [[]];
        foreach ($switch as $bin) {
            $arr = [];

            for ($i = 0; $i < $length; $i++) {
                if ((int)$bin[$i] === 1) {
                    $arr[] = $nums[$i];
                }
            }

            sort($arr);

            $str = implode(',', $arr);
            if (!isset($map[$str])) {
                $solution[] = array_reverse($arr);
                $map[$str] = true;
            }
        }

        return $solution;
    }
}
