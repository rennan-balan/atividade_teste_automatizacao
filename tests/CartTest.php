<?php
use PHPUnit\Framework\TestCase;
use TestesAutomatizados\FreightCalculation\Entities\Cart;
use TestesAutomatizados\FreightCalculation\Entities\User;
use TestesAutomatizados\FreightCalculation\Entities\Product;

class CartTest extends TestCase {

    /** 
     * @covers new Cart()
    */
    public function testCartCreate(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $cart = new Cart();
        $cart->setUser($user);

        $this->assertInstanceOf(Cart::class, $cart);
        $this->assertEquals($user->getName(), $cart->getUser()->getName());
        $this->assertEquals($user->getCep(), $cart->getUser()->getCep());
        $this->assertEmpty($cart->getOrderList());
    }

    /** 
     * @covers Cart::total()
    */
    public function testEmptyCart(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $cart = new Cart();
        $cart->setUser($user);

        $this->assertEquals(0, $cart->total());
    }

    /** 
     * @covers Cart::total()
    */
    public function testCartTotal(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $product = new Product();
        $product->setName('Placa de Vídeo');
        $product->setPrice(3000.0);

        $cart = new Cart();
        $cart->setUser($user);
        $cart->addProduct($product, 2);

        $this->assertNotEmpty($cart->getOrderList());
        $this->assertEquals(6000, $cart->total());
    }

    /** 
     * @covers Cart::total()
    */
    public function testCartPreviousAddedProduct(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $product = new Product();
        $product->setName('Placa de Vídeo');
        $product->setPrice(3000.0);

        $cart = new Cart();
        $cart->setUser($user);
        $cart->addProduct($product, 1);
        $cart->addProduct($product, 1);

        $this->assertNotEmpty($cart->getOrderList());
        $this->assertEquals(6000, $cart->total());
    }

    /** 
     * @covers Cart::total()
    */
    public function testCartRemoveOneProduct(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $product = new Product();
        $product->setName('Placa de Vídeo');
        $product->setPrice(3000.0);

        $product2 = new Product();
        $product2->setName('Mouse Óptico');
        $product2->setPrice(200.0);

        $cart = new Cart();
        $cart->setUser($user);
        $cart->addProduct($product, 1);
        $cart->addProduct($product2, 1);

        $this->assertNotEmpty($cart->getOrderList());
        $this->assertEquals(3200, $cart->total());

        $cart->removeProduct($product, 1);

        $this->assertNotEmpty($cart->getOrderList());
        $this->assertEquals(200, $cart->total());
    }

    /** 
     * @covers Cart::total()
    */
    public function testCartRemoveAllProducts(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $product = new Product();
        $product->setName('Placa de Vídeo');
        $product->setPrice(3000.0);

        $product2 = new Product();
        $product2->setName('Mouse Óptico');
        $product2->setPrice(200.0);

        $cart = new Cart();
        $cart->setUser($user);
        $cart->addProduct($product, 1);
        $cart->addProduct($product2, 1);

        $this->assertNotEmpty($cart->getOrderList());
        $this->assertEquals(3200, $cart->total());

        $cart->removeProduct($product, 1);
        $cart->removeProduct($product2, 1);

        $this->assertEmpty($cart->getOrderList());
        $this->assertEquals(0, $cart->total());
    }
}
