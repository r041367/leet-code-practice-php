<?php


namespace R041367\LeetCodePracticePhp\Medium;

/**
 * 3. Longest Substring Without Repeating Characters
 * https://leetcode.com/problems/longest-substring-without-repeating-characters/
 *
 * Given a string s, find the length of the longest substring without repeating characters.
 *
 * Constraints:
 * 0 <= s.length <= 5 * 10^4
 * s consists of English letters, digits, symbols and spaces.
 *
 * Class LongestSubstringWithoutRepeatingCharacters
 * @package R041367\LeetCodePracticePhp\Medium
 */
class LongestSubstringWithoutRepeatingCharacters
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $length = strlen($s);
        if ($length < 2) {
            return $length;
        }

        $max = 0;
        $left = -1;
        $temp = [];
        for ($i = 0; $i < $length; $i++) {
            $char = $s[$i];
            $pos = $temp[$char] ?? -1;
            $left = max($left, $pos);

            $temp[$char] = $i;

            $max = max($max, $i - $left);
        }
        return $max;
    }
}
