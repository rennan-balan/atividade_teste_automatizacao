<?php
use PHPUnit\Framework\TestCase;
use TestesAutomatizados\FreightCalculation\Services\CorreiosService;
use TestesAutomatizados\FreightCalculation\Entities\User;
use TestesAutomatizados\FreightCalculation\Entities\Product;
use TestesAutomatizados\FreightCalculation\Entities\Cart;
use TestesAutomatizados\FreightCalculation\Services\CalculationService;

class CalculationServiceTest extends TestCase {

    /** 
     * @covers CalculationService::total()
    */
    public function testCalculationServiceTotalFreightless(): void
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

        $correiosService = $this->createMock(CorreiosService::class);

        $correiosService->method('calculate')->willReturn(0.0);

        $calculationService = new CalculationService($correiosService);

        $total = $calculationService->total($cart);

        $this->assertEquals(6000.0, $total);
    }

    /** 
     * @covers CalculationService::total()
    */
    public function testCalculationServiceTotalFreight1(): void
    {
        $user = new User();
        $user->setName('Billy');
        $user->setCep('12345678');

        $product = new Product();
        $product->setName('Pendrive');
        $product->setPrice(30.0);

        $cart = new Cart();
        $cart->setUser($user);
        $cart->addProduct($product, 2);

        $correiosService = $this->createMock(CorreiosService::class);

        $correiosService->method('calculate')->willReturn(10.99);

        $calculationService = new CalculationService($correiosService);

        $total = $calculationService->total($cart);

        $this->assertEquals(70.99, $total);
    }

    /** 
     * @covers CalculationService::total()
    */
    public function testCalculationServiceTotalFreight2(): void
    {
        $user = new User();
        $user->setName('Mike');
        $user->setCep('78965432');

        $product = new Product();
        $product->setName('Pendrive');
        $product->setPrice(30.0);

        $cart = new Cart();
        $cart->setUser($user);
        $cart->addProduct($product, 2);

        $correiosService = $this->createMock(CorreiosService::class);

        $correiosService->method('calculate')->willReturn(1.99);

        $calculationService = new CalculationService($correiosService);

        $total = $calculationService->total($cart);

        $this->assertEquals(61.99, $total);
    }
}
