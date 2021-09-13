<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 14. Longest Common Prefix
 * https://leetcode.com/problems/longest-common-prefix/
 *
 * Write a function to find the longest common prefix string amongst an array of strings.
 * If there is no common prefix, return an empty string "".
 *
 * Constraints:
 * 1 <= strs.length <= 200
 * 0 <= strs[i].length <= 200
 * strs[i] consists of only lower-case English letters.
 *
 * Class LongestCommonPrefix
 * @package R041367\LeetCodePracticePhp\Easy
 */
class LongestCommonPrefix
{
    public static function run(array $strings): string
    {
        $first = $strings[0];
        $firstLength = strlen($first);
        $length = count($strings);

        $prefix = '';
        $lenMax = 0;

        for ($j = 0; $j < $firstLength; $j++) {
            $prefix .= $first[$j];
            ++$lenMax;
            $allPass = true;

            for ($i = 1; $i < $length; $i++) {
                $str = $strings[$i];
                if (strpos($str, $prefix) !== 0) {
                    $allPass = false;
                    break;
                }
            }

            if ($allPass === false) {
                --$lenMax;
                break;
            }
        }

        return substr($first, 0, $lenMax);
    }
}
