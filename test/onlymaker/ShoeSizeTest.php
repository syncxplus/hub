<?php

use onlymaker\ShoeSize;
use PHPUnit\Framework\TestCase;

class ShoeSizeTest extends TestCase
{
    function test()
    {
        $shoeSize = ShoeSize::instance();
        print_r($shoeSize->normalize('US5'));
        print_r($shoeSize->normalize('EU37'));
        print_r($shoeSize->normalize('UK8'));
        print_r($shoeSize->normalize('CN5'));
        print_r($shoeSize->normalize('US99'));
        $this->assertTrue(true);
    }
}
