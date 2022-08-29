<?php

class stringTest extends \PHPUnit\Framework\TestCase{
   
    public function testThatStringMatch(){
        $string1 = 'testing';
        $string2 = 'testing';

        $string3 = 'testing';

        $this->assertSame($string1, $string2);
        $this->assertEquals($string1, $string3);
    }

    public function testThatNumberAddsUp()
    {
        $this->assertEquals(10, 4+5);
    }
}