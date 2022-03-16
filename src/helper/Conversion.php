<?php
declare (strict_types=1);

namespace abxk\helper;

/**
 * 转换函数集
 * @package itch\tools
 */
class Conversion
{
    /**
     * JSON转数组
     *
     * @param string $json
     * @param int $options
     *
     * @return mixed
     */
    public static function json2Arr(string $json, $options = JSON_UNESCAPED_UNICODE)
    {
        return json_decode($json, true, 512, $options);
    }

    /**
     * 数组转JSON
     *
     * @param array $array
     * @param int $options
     *
     * @return mixed
     */
    public static function arr2Json(array $array, $options = JSON_UNESCAPED_UNICODE)
    {
        return json_encode($array, $options);
    }

    /**
     * 字符串转数组
     * @param string $text 待转内容
     * @param string $separ 分隔符
     * @param null|array $allow 限定规则
     * @return array
     */
    public static function str2Arr(string $text, string $separ = ',', ?array $allow = null): array
    {
        $items = [];
        foreach (explode($separ, trim($text, $separ)) as $item) {
            if ($item !== '' && (!is_array($allow) || in_array($item, $allow))) {
                $items[] = $item;
            }
        }

        return $items;
    }

    /**
     * 数组转字符串
     * @param array $data 待转数组
     * @param string $separ 分隔字符
     * @param null|array $allow 限定规则
     * @return string
     */
    public static function arr2Str(array $data, string $separ = ',', ?array $allow = null): string
    {
        foreach ($data as $key => $item) {
            if ($item === '' || (is_array($allow) && !in_array($item, $allow))) {
                unset($data[$key]);
            }
        }

        return join($separ, $data);
    }
}