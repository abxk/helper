<?php


namespace abxk\test\helper;

use abxk\helper\Conversion;
use PHPUnit\Framework\TestCase;

class ConversionTest extends TestCase
{
    public function testJson2Arr()
    {
        $this->assertSame(['code' => 123], Conversion::json2Arr('{"code":123}'));
    }

    public function testArr2Json()
    {
        $this->assertSame('{"code":123}', Conversion::arr2Json(['code' => 123]));
    }

    public function testStr2Arr()
    {
        $this->assertSame([
            0 => '123',
            1 => '123',
            2 => '123'
        ], Conversion::str2Arr(",123,123,123,"));

        $this->assertSame([
            0 => '123',
            1 => '123',
            2 => '123'
        ], Conversion::str2Arr("123,123,123"));

        $this->assertSame([
            "0" => '123',
            "1" => '123',
            "2" => '123'
        ], Conversion::str2Arr("123,123,123"));

        $this->assertSame([
            "0" => '123',
            "1" => '1234',
        ], Conversion::str2Arr("123,1234,12345", ',', ['123', '1234']));

    }

    public function testArr2Str()
    {
        $this->assertSame("123,123,123", Conversion::arr2Str([
            0 => '123',
            1 => '123',
            2 => '123'
        ]));
    }
}