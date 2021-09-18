<?php


namespace R041367\LeetCodePracticePhp\Easy;

/**
 * 168. Excel Sheet Column Title
 * https://leetcode.com/problems/excel-sheet-column-title/
 *
 * Given an integer columnNumber, return its corresponding column title as it appears in an Excel sheet.
 *
 * Constraints:
 * 1 <= columnNumber <= 231 - 1
 *
 * Class ExcelSheetColumnTitle
 * @package R041367\LeetCodePracticePhp\Easy
 */
class ExcelSheetColumnTitle
{
    public function convertToTitle(int $columnNumber): string
    {
        // quotient 商
        // remainder 余数
        $arr = range('A', 'Z');

        $base = count($arr);

        $str = '';
        while ($columnNumber > 0) {
            --$columnNumber;
            $m = ($columnNumber) % $base;

            $str = $arr[$m].$str;
            $columnNumber = floor(($columnNumber) / $base);
        }

        return $str;
    }
}
