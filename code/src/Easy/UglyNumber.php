<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 263. Ugly Number
 * https://leetcode.com/problems/ugly-number/
 *
 * An ugly number is a positive integer whose prime factors are limited to 2, 3, and 5.
 * Given an integer n, return true if n is an ugly number.
 *
 * Constraints:
 * -2^31 <= n <= 2^31 - 1
 *
 * Class UglyNumber
 * @package R041367\LeetCodePracticePhp\Easy
 */
class UglyNumber
{
    public function isUgly(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }
        if ($n === 1) {
            return true;
        }
        while ($n % 2 === 0) {
            $n >>= 1;
        }
        while ($n % 3 === 0) {
            $n /= 3;
        }
        while ($n % 5 === 0) {
            $n /= 5;
        }
        return $n === 1;
    }
}
