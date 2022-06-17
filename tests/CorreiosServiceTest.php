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

        $correio = new CorreiosService();

        $value = $correio->calculate($cep);

        $this->assertEquals(10.99, $value);
    }
}
