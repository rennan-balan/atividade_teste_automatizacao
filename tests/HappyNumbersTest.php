<?php
use TestesAutomatizados\HappyNumbers;
use PHPUnit\Framework\TestCase;

class HappyNumbersTest extends TestCase {
    /**
     * @covers HappyNumbers::isHappyNumber
     */
    public function testIsHappyNumber(): void 
    {
        $numberToCheck = 7;

        $isHappyNumber = HappyNumbers::isHappyNumber($numberToCheck);
        
        $this->assertEquals("É um número feliz", $isHappyNumber, 'Errou');
    }

    /**
     * @covers HappyNumbers::isHappyNumber
     */
    public function testIsNotAHappyNumber(): void 
    {
        $numberToCheck = 6;

        $isHappyNumber = HappyNumbers::isHappyNumber($numberToCheck);

        $this->assertEquals("Não é um número feliz", $isHappyNumber, 'Errou');
    }

    /**
     * @covers HappyNumbers::shouldStopWhile
     */
    public function testShouldStopWhile(): void
    {
        $numbereToCheck = 6;

        $occurrences = [7];

        $shouldStopWhile = HappyNumbers::shouldStopWhile($numbereToCheck, $occurrences);

        $this->assertTrue($shouldStopWhile);
    }

    /**
     * @covers HappyNumbers::shouldStopWhile
     */
    public function testShouldNotStopWhile(): void
    {
        $numbereToCheck = 7;

        $occurrences = [7];

        $shouldStopWhile = HappyNumbers::shouldStopWhile($numbereToCheck, $occurrences);

        $this->assertFalse($shouldStopWhile);
    }

    /**
     * @covers HappyNumbers::isNumberInArray
     */
    public function testIsNumberInArray(): void
    {
        $numbereToCheck = 7;
        
        $arrayToCheck = [7];

        $isNumberInArray = HappyNumbers::isNumberInArray($numbereToCheck, $arrayToCheck);

        $this->assertTrue($isNumberInArray);
    }

    /**
     * @covers HappyNumbers::isNumberInArray
     */
    public function testIsNumberNotInArray(): void
    {
        $numbereToCheck = 6;

        $arrayToCheck = [7];

        $isNumberInArray = HappyNumbers::isNumberInArray($numbereToCheck, $arrayToCheck);

        $this->assertFalse($isNumberInArray);
    }

    /**
     * @covers HappyNumbers::splitNumberToArray
     */
    public function testSplitNumberToArray(): void
    {
        $numberToSplit = 12;

        $splittedNumber = HappyNumbers::splitNumberToArray($numberToSplit);

        $this->assertEquals([1, 2], $splittedNumber);
    }

    /**
     * @covers HappyNumbers::sumPotencyValues
     */
    public function testSumPotencyValues(): void
    {
        $values = [1, 2];

        $sumOfPotency = HappyNumbers::sumPotencyValues($values);

        $this->assertEquals(5, $sumOfPotency);
    }
}
