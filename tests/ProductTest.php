<?php
use PHPUnit\Framework\TestCase;
use TestesAutomatizados\FreightCalculation\Entities\Product;

class ProductTest extends TestCase {

    /** 
     * @covers new Product()
    */
    public function testProductCreate(): void
    {
        $name = 'Monitor';
        $price = 199.99;

        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals($name, $product->getName());
        $this->assertEquals($price, $product->getPrice());
    }
}
