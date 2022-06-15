<?php
namespace TestesAutomatizados;

class WordsInNumbers {
    private const startLowerCase = 97;
    private const endLowerCase = 122;
    private const startUpperCase = 65;
    private const endUpperCase = 90;
    private const upperCaseFactor = 38;
    private const lowerCaseFactor = 96;

    public function convertWordToNumber(string $wordToConvert): int
    {
        $splittedWord = str_split($wordToConvert);

        return array_reduce($splittedWord, function($sum, $letter) {
            $sum += 0;
            if(self::allowOnlyAsciiLetters(self::convertCharToAscii($letter))) {
                $numberEquivalent = self::convertAsciiCode($letter);
                $sum += $numberEquivalent;
            }
            return $sum;
        });
    }

    public static function convertCharToAscii(string $char): int
    {
        return ord($char);
    }
    
    public static function convertAsciiCode(string $letter): int
    {
        return ctype_upper($letter) ? self::convertUpperCase(self::convertCharToAscii($letter)) : self::convertLowerCase(self::convertCharToAscii($letter));
    }

    public static function convertUpperCase(int $asciiCode): int
    {
        return $asciiCode - self::upperCaseFactor;
    }

    public static function convertLowerCase(int $asciiCode): int
    {
        return $asciiCode - self::lowerCaseFactor;
    }

    public static function allowOnlyAsciiLetters(int $asciiCode): bool
    {
        return self::allowLowerCase($asciiCode) || self::allowUpperCase($asciiCode);
    }

    public static function allowLowerCase(int $asciiCode): bool
    {
        return self::startLowerCase <= $asciiCode && $asciiCode <= self::endLowerCase;
    }

    public static function allowUpperCase(int $asciiCode): bool
    {
        return self::startUpperCase <= $asciiCode && $asciiCode <= self::endUpperCase;
    }
}
