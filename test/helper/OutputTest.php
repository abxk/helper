<?php


namespace abxk\test\helper;


use abxk\helper\Output;
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testNorm()
    {
        $this->assertSame('{"code":200,"data":{"code":123},"msg":"测试"}', Output::norm(200, ['code' => 123], '测试'));
    }

    public function testSuccess()
    {
        $this->assertSame('{"code":200,"data":{"code":123},"msg":"测试"}', Output::success(['code' => 123], '测试'));
    }

    public function testError()
    {
        $this->assertSame('{"code":404,"data":[],"msg":"测试"}', Output::error(404, '测试'));
    }
}