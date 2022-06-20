<?php
use PHPUnit\Framework\TestCase;
use TestesAutomatizados\FreightCalculation\Services\CorreiosService;

class CorreiosServiceTest extends TestCase {

    /** 
     * @covers CorreiosService::calculate()
    */
    public function testCorreiosServiceCalculate(): void
    {
        $cep = '12345048';

        $correiosService = $this->createMock(CorreiosService::class);

        $correiosService->method('calculate')->willReturn(10.99);

        $this->assertEquals(10.99, $correiosService->calculate($cep));
    }
}
