<?php


namespace abxk\test\helper;


use abxk\helper\Date;
use PHPUnit\Framework\TestCase;

class DateTest  extends TestCase
{
    public function testGetMonthDays()
    {
        $this->assertSame(28, Date::getMonthDays(time()));
    }

    public function testFormatDateTime()
    {
        $this->assertSame('2022-01-31 14:28:06', Date::formatDateTime(1643639286));
    }

    public function testUnixTimestamp()
    {
        $this->assertSame(1643639286, Date::unixTimestamp(1643639286));
        var_dump(Date::formatDateTime(1643639286));

        $this->assertSame(1609459200, Date::unixTimestamp(2021));
        var_dump(Date::formatDateTime(1609459200));

        $this->assertSame(1643639286, Date::unixTimestamp("2022-01-31 14:28:06"));
        var_dump(Date::formatDateTime(1643639286));

        $this->assertSame(1643587200, Date::unixTimestamp("2022-01-31"));
        var_dump(Date::formatDateTime(1643587200));

        $this->assertSame(1643639286, Date::unixTimestamp(1643639286000));
        var_dump(Date::formatDateTime(1643639286));
    }

}
