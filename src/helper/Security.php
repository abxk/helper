<?php


namespace abxk\helper;

/**
 * Class Security
 * @package etouch\helper
 * @author lixuecong <1126392029@qq.com>
 */
class Security
{

    /**
     * 文本内容XSS过滤
     * @param string $text
     * @return string
     */
    public static function xssSafe(string $text): string
    {
        $rules = [
            '#<script.*?<\/script>#i' => '',
            '#\s+on\w+=[\'\"]+.*?(\'|\")+#i' => '',
            '#\s+on\w+=\s*.*?(\s|>)+#i' => '$1',
        ];
        foreach ($rules as $rule => $value) {
            $text = preg_replace($rule, $value, $text);
        }
        return $text;
    }
}