<?php
declare(strict_types=1);

namespace abxk\test\helper;

use abxk\helper\Str;
use PHPUnit\Framework\TestCase;

/**
 * Class StrTest
 * @package test
 */
final class StrTest extends TestCase
{
    private $haystack;

    protected function setUp(): void
    {
        $this->haystack = '123456789';
    }

    public function testContains(): void
    {
        $this->assertEquals(true, Str::contains($this->haystack, ['123', '789']));
    }

    public function testEndsWith(): void
    {
        $this->assertEquals(true, Str::endsWith($this->haystack, ['123', '789']));
    }

    public function testStartsWith(): void
    {
        $this->assertEquals(true, Str::startsWith($this->haystack, ['123', '789']));
    }

    public function testRandom(): void
    {
        $this->assertIsString(Str::random(10));
    }

    public function testLower(): void
    {
        $this->assertEquals('abcde', Str::lower('ABCDE'));
    }

    public function testUpper(): void
    {
        $this->assertEquals('ABCDE', Str::upper('abcde'));
    }

    public function testLength(): void
    {
        $this->assertEquals(5, Str::length('abcde'));
    }

    public function testSubstr(): void
    {
        $this->assertEquals('abcd', Str::substr('abcde', 0, 4));
    }

    public function testSnake(): void
    {
        $this->assertEquals('camel_case', Str::snake('CamelCase'));
    }

    public function testCamel(): void
    {
        $this->assertEquals('camelCase', Str::camel('camel_case'));
    }

    public function testStudly(): void
    {
        $this->assertEquals('CamelCase', Str::studly('camel_case'));
    }

    public function testTitle(): void
    {
        $this->assertEquals('Camel_Case', Str::title('camel_case'));
    }

}