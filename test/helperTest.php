<?php


namespace abxk\test;


use abxk\DS;
use abxk\test\helper\ConversionTest;
use abxk\test\helper\DateTest;

class helperTest extends DateTest
{
    public function testDs()
    {
        $this->assertSame((new DS())->toArray(), ds()->toArray());
    }

    public function testGetMonthDays()
    {
        parent::testGetMonthDays();
    }

    public function testFormatDateTime()
    {
        parent::testFormatDateTime();
    }

    public function testUnixTimestamp()
    {
        parent::testUnixTimestamp();
    }

    public function testJson2Arr()
    {
        (new ConversionTest())->testJson2Arr();
    }

    public function testArr2Json()
    {
        (new ConversionTest())->testArr2Json();
    }


    public function testStr2Arr()
    {
       (new ConversionTest())->testStr2Arr();
    }

    public function testArr2Str()
    {
        (new ConversionTest())->testArr2Str();
    }


}