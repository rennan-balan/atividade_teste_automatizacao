<?php
use TestesAutomatizados\Multiples;
use PHPUnit\Framework\TestCase;

class MultiplesTest extends TestCase {
    /**
     * @covers Multiples::sumMultipleXOrY
     */
    public function testSumMultipleXOrY(): void 
    {
        $sum = Multiples::sumMultipleXOrY(3, 5);
        $this->assertEquals(233168, $sum, 'Errou');
    }
    
    /**
     * @covers Multiples::sumMultipleXAndY
     */
    public function testSumMultipleXAndY(): void 
    {
        $sum = Multiples::sumMultipleXAndY(3, 5);
        $this->assertEquals(33165, $sum, 'Errou');
    }

    /**
     * @covers Multiples::sumMultipleXOrYAndZ
     */
    public function testSumMultipleXOrYAndZ(): void 
    {
        $sum = Multiples::sumMultipleXOrYAndZ(3, 5, 7);
        $this->assertEquals(33173, $sum, 'Errou');
    }

    /**
     * @covers Multiples::isValueDivisible
     */
    public function testIsValueDivisible(): void 
    {
        $isDivisible = Multiples::isValueDivisible(10, 2);
        $this->assertTrue($isDivisible, 'Errou');
    }

    /**
     * @covers Multiples::isValueDivisible
     */
    public function testIsValueNotDivisible(): void 
    {
        $isDivisible = Multiples::isValueDivisible(10, 3);
        $this->assertFalse($isDivisible, 'Errou');
    }

    /**
     * @covers Multiples::isValueDivisibleByXAndY
     */
    public function testIsValueDivisibleByXAndY(): void 
    {
        $isDivisible = Multiples::isValueDivisibleByXAndY(15, 3, 5);
        $this->assertTrue($isDivisible, 'Errou');
    }

    /**
     * @covers Multiples::isValueDivisibleByXAndY
     */
    public function testIsValueNotDivisibleByXAndY(): void 
    {
        $isDivisible = Multiples::isValueDivisibleByXAndY(15, 3, 4);
        $this->assertFalse($isDivisible, 'Errou');
    }

    /**
     * @covers Multiples::isValueDivisibleByXOrY
     */
    public function testIsValueDivisibleByXOrY(): void 
    {
        $isDivisible = Multiples::isValueDivisibleByXOrY(10, 3, 2);
        $this->assertTrue($isDivisible, 'Errou');
    }

    /**
     * @covers Multiples::isValueDivisibleByXOrY
     */
    public function testIsValueNotDivisibleByXOrY(): void 
    {
        $isDivisible = Multiples::isValueDivisibleByXOrY(10, 3, 4);
        $this->assertFalse($isDivisible, 'Errou');
    }
}
