<?php

use onlymaker\ShoeSize;
use PHPUnit\Framework\TestCase;

class ShoeSizeTest extends TestCase
{
    function test()
    {
        $shoeSize = ShoeSize::instance();
        $reflection = new ReflectionClass($shoeSize);
        $this->assertEquals('EU39', $shoeSize->convert('US9', ShoeSize::EU));
        $this->assertEquals(ShoeSize::EU, $shoeSize->convert('US7.5', ShoeSize::EU));
        print_r($shoeSize->normalize('US9.5'));
        print_r($shoeSize->normalize('us9.9'));
        print_r($shoeSize->normalize('cn35'));
        print_r($reflection->getProperties());
        print_r($reflection->getConstants());
    }
}
