<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 58. Length of Last Word
 * https://leetcode.com/problems/length-of-last-word/
 *
 * Given a string s consisting of some words separated by some number of spaces, return the length of the last word in the string.
 * A word is a maximal substring consisting of non-space characters only.
 *
 * Constraints:
 * 1 <= s.length <= 10^4
 * s consists of only English letters and spaces ' '
 * There will be at least one word in s
 *
 * Class LengthOfLastWord
 * @package R041367\LeetCodePracticePhp\Easy
 */
class LengthOfLastWord
{
    public static function run(string $s): string
    {
        $s = trim($s);
        $arr = explode(' ', $s);
        return strlen($arr[count($arr) - 1]);
    }
}
