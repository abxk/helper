<?php
declare (strict_types=1);

namespace abxk\helper;

/**
 * 时间处理函数集
 * @package itch\tools
 */
class Date
{
    /**
     * 获取时间戳的所在月份的天数
     * @param int $time 时间戳
     * @return int
     */
    public static function getMonthDays($time)
    {
        $start_day = date('Ym01', $time);
        return (int)date('d', strtotime("{$start_day} + 1 month -1 day"));
    }

    /**
     * 日期格式标准输出
     * @param int|string $datetime 输入日期
     * @param string $format 输出格式
     * @param string $is_null 当为空时的输出
     * @return string
     */
    public static function formatDateTime($datetime, string $format = 'Y-m-d H:i:s', $is_null = ''): string
    {
        if (empty($datetime)) {
            return $is_null;
        }
        if (is_numeric($datetime)) {
            return date($format, $datetime);
        }
        return date($format, strtotime($datetime));

    }

    /**
     * 时间字符串转UNIX时间戳
     *
     * @param $str
     * @return int
     */
    public static function unixTimestamp($str)
    {
        if (!is_numeric($str)) {
            return strtotime($str);
        }
        $digit = strlen((string) floor($str));
        if ($digit == 10) {
            return $str;
        }
        if ($digit == 13) {
            return $str / 1000;
        }
        if ($digit == 4) {
            return strtotime("{$str}-01-01 00:00:00");
        }
        return 0;
    }
}