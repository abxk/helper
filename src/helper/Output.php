<?php
declare(strict_types=1);

namespace abxk\helper;

/**
 * API标准输出
 * @package itch\tools
 */
class Output
{
    /**
     * 标准输出
     * @param int $code
     * @param mixed $data
     * @param string $msg
     * @return mixed|string
     */
    public static function norm(int $code, ?array $data, string $msg)
    {
        return Conversion::arr2Json([
            'code' => $code,
            'data' => $data,
            'msg' => $msg,
        ]);
    }

    /**
     * 成功输出
     * @param array|null $data
     * @param string $msg
     * @param int $code
     * @return mixed|string
     */
    public static function success(?array $data, string $msg = 'success', int $code = 200)
    {
        return static::norm($code, $data, $msg);
    }

    /**
     * 异常输出
     * @param int $code
     * @param string $msg
     * @param array|null $data
     * @return mixed|string
     */
    public static function error(int $code = 500, string $msg = 'error', ?array $data = [])
    {
        return static::norm($code, $data, $msg);
    }

}
