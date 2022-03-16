<?php
declare(strict_types=1);


namespace abxk\test;


use abxk\DS;

use PHPUnit\Framework\TestCase;

class DSTest extends TestCase
{

    public function testMerge()
    {
        $c = new DS(['name' => 'Hello']);
        $this->assertSame(['name' => 'Hello', 'id' => 1], $c->merge(['id' => 1])->all());
    }

    public function testFirst()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $this->assertSame('Hello', $c->first());
    }

    public function testLast()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $this->assertSame(25, $c->last());
    }

    public function testToArray()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $this->assertSame(['name' => 'Hello', 'age' => 25], $c->toArray());
    }

    public function testToJson()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $this->assertSame(json_encode(['name' => 'Hello', 'age' => 25]), $c->toJson());
        $this->assertSame(json_encode(['name' => 'Hello', 'age' => 25]), (string) $c);
        $this->assertSame(json_encode(['name' => 'Hello', 'age' => 25]), json_encode($c));
    }

    public function testSerialize()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $sc = serialize($c);
        $c = unserialize($sc);

        $this->assertSame(['name' => 'Hello', 'age' => 25], $c->all());
    }

    public function testGetIterator()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $this->assertInstanceOf(\ArrayIterator::class, $c->getIterator());

        $this->assertSame(['name' => 'Hello', 'age' => 25], $c->getIterator()->getArrayCopy());
    }

    public function testCount()
    {
        $c = new DS(['name' => 'Hello', 'age' => 25]);

        $this->assertCount(2, $c);
    }
}
