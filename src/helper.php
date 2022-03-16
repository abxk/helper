<?php
declare(strict_types=1);

/**
 * 不可在此文件构造任何逻辑方法，只可 快捷化 itch\helper 下的实例或方法
 */

use abxk\DS;
use abxk\helper\Conversion;
use abxk\helper\Date;
use abxk\helper\Output;

if (!function_exists("ds")) {
    /**
     * 数据集实例化快捷方式
     *
     * @param mixed $data
     *
     * @return DS
     *
     * @uses lixuecong <1126392029@qq.com>
     */
    function ds($data = []): DS
    {
        return new DS($data);
    }
}

if (!function_exists("success")) {
    /**
     * 正常输出
     *
     * @param array|null $data
     * @param string $msg
     * @param int $code
     * @return mixed|string
     *
     * @author: lixuecong <1126392029@qq.com>
     *
     * @copyright  2022/2/22 16:15
     */
    function success(?array $data, string $msg = 'success', int $code = 200)
    {
        return Output::success($data, $msg, $code);
    }
}

if (!function_exists("error")) {
    /**
     * 异常输出
     *
     * @param int $code
     * @param string $msg
     * @param array|null $data
     * @return mixed|string
     *
     * @author: lixuecong <1126392029@qq.com>
     *
     * @copyright  2022/2/22 16:15
     */
    function error(int $code = 404, string $msg = 'error', ?array $data = [])
    {
        return Output::error($code, $msg, $data);
    }
}


if (!function_exists("formatDateTime")) {
    /**
     * 日期格式标准输出
     *
     * @param int|string $datetime 输入日期
     * @param string $format 输出格式
     * @param string $is_null 当为空时的输出
     *
     * @return string
     *
     * @uses lixuecong <1126392029@qq.com>
     *
     * @trigger_error
     */
    function formatDateTime($datetime, string $format = 'Y-m-d H:i:s', $is_null = ''): string
    {
        return Date::formatDateTime($datetime, $format, $is_null);
    }
}


if (!function_exists("unixTimestamp")) {
    /**
     * 时间字符串转UNIX时间戳
     *
     * @param $str
     * @return string
     *
     * @uses lixuecong <1126392029@qq.com>
     */
    function unixTimestamp($str): string
    {
        return Date::unixTimestamp($str);
    }
}

if (!function_exists("json2Arr")) {
    /**
     * JSON转数组
     *
     * @param string $json
     * @param int $options
     * @return array
     *
     * @uses lixuecong <1126392029@qq.com>
     */
    function json2Arr(string $json, $options = JSON_UNESCAPED_UNICODE)
    {
        return Conversion::json2Arr($json, $options);
    }
}


if (!function_exists("arr2Json")) {
    /**
     * 数组转JSON
     *
     * @param array $array
     * @param int $options
     *
     * @return mixed
     */
    function arr2Json(array $array, $options = JSON_UNESCAPED_UNICODE)
    {
        return Conversion::arr2Json($array, $options);
    }
}

if (!function_exists("str2Arr")) {
    /**
     * 字符串转数组
     *
     * @param string $text 待转内容
     * @param string $separ 分隔符
     * @param null|array $allow 限定规则
     *
     * @return array
     *
     * @uses lixuecong <1126392029@qq.com>
     *
     */
    function str2Arr(string $text, string $separ = ',', ?array $allow = null): array
    {
        return Conversion::str2Arr($text, $separ, $allow);
    }
}


if (!function_exists("arr2Str")) {
    /**
     * 数组转字符串
     *
     * @param array $data 待转数组
     * @param string $separ 分隔字符
     * @param null|array $allow 限定规则
     *
     * @return string
     *
     * @uses lixuecong <1126392029@qq.com>
     */
    function arr2Str(array $data, string $separ = ',', ?array $allow = null): string
    {
        return Conversion::arr2Str($data, $separ, $allow);
    }
}



