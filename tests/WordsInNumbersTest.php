<?php
use TestesAutomatizados\WordsInNumbers;
use PHPUnit\Framework\TestCase;

class WordsInNumbersTest extends TestCase {
    /** 
     * @covers WordsInNumbers::isCousinPrime
    */
    public function testIsCousinPrime(): void
    {
        $number = 5;

        $isCousinPrime = WordsInNumbers::isCousinPrime($number);

        $this->assertTrue($isCousinPrime, 'Errou');
    }
    
     /** 
     * @covers WordsInNumbers::convertCharToAscii
    */
    public function testConvertCharToAscii(): void
    {
        $char = 'R';

        $convertCharToAscii = WordsInNumbers::convertCharToAscii($char);

        $this->assertEquals(82, $convertCharToAscii, 'Errou');
    }
    
    /** 
     * @covers WordsInNumbers::convertWordToNumber
    */
    public function testConvertWordToNumber(): void
    {
        $wordToConvert = 'Rennan';

        $wordToNumber = WordsInNumbers::convertWordToNumber($wordToConvert);

        $this->assertEquals(92, $wordToNumber, 'Errou');
    }

    /** 
     * @covers WordsInNumbers::convertAsciiCode
    */
    public function testConvertAsciiCode(): void
    {
        $wordToConvert = 'R';

        $convertAsciiCode = WordsInNumbers::convertAsciiCode($wordToConvert);

        $this->assertEquals(44, $convertAsciiCode, 'Errou');
    }

    /** 
     * @covers WordsInNumbers::convertUpperCase
    */
    public function testConvertUpperCase(): void
    {
        $asciiCode = 65;

        $convertUpperCase = WordsInNumbers::convertUpperCase($asciiCode);

        $this->assertEquals(27, $convertUpperCase, 'Errou');
    }

    /** 
     * @covers WordsInNumbers::convertLowerCase
    */
    public function testConvertLowerCase(): void
    {
        $asciiCode = 97;

        $convertLowerCase = WordsInNumbers::convertLowerCase($asciiCode);

        $this->assertEquals(1, $convertLowerCase, 'Errou');
    }

    /** 
     * @covers WordsInNumbers::allowOnlyAsciiLetters
    */
    public function testAllowOnlyAsciiLetters(): void
    {
        $asciiCode = 66;

        $allowOnlyAsciiLetters = WordsInNumbers::allowOnlyAsciiLetters($asciiCode);

        $this->assertTrue($allowOnlyAsciiLetters, 'Errou');
    }

    /** 
     * @covers WordsInNumbers::allowLowerCase
    */
    public function testAllowLowerCase(): void
    {
        $asciiCode = 97;

        $allowLowerCase = WordsInNumbers::allowLowerCase($asciiCode);

        $this->assertTrue($allowLowerCase, 'Errou');
    }

    /** 
     * @covers WordsInNumbers::allowUpperCase
    */
    public function testAllowUpperCase(): void
    {
        $asciiCode = 68;

        $allowUpperCase = WordsInNumbers::allowUpperCase($asciiCode);

        $this->assertTrue($allowUpperCase, 'Errou');
    }
}