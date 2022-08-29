<?php

require 'Cart.php';
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCorrectNetPriceIsReturned()
    {
        require 'Cart.php';

        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }

    /** @test */
    public function the_cart_tax_value_can_be_changed()
    {
        Cart::$tax = 1.5;

        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
        $this->assertSame(10, $netPrice);
    }
}