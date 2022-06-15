<?php
namespace TestesAutomatizados;

class HappyNumbers {

    private const targetNumber = 1;
    public static function isHappyNumber(int $numberToCheck): string
    {
        $occurrences = [];

        while (self::shouldStopWhile($numberToCheck, $occurrences)) {
            $occurrences[] = $numberToCheck;
            $arrayOfNumbers = self::splitNumberToArray($numberToCheck);
            $numberToCheck = self::sumPotencyValues($arrayOfNumbers);
        }
        
        return $numberToCheck == self::targetNumber ? 'É um número feliz' : 'Não é um número feliz';
    }

    public static function shouldStopWhile(int $numberToCheck, array $occurrences): bool
    {
        return $numberToCheck > self::targetNumber && !self::isNumberInArray($numberToCheck, $occurrences);
    }

    public static function isNumberInArray(int $numberToCheck, array $arrayToCheck): bool 
    {
        return in_array($numberToCheck, $arrayToCheck);
    }

    public static function splitNumberToArray(int $numberToConvert): array
    {
        return str_split(strval($numberToConvert));
    }

    public static function sumPotencyValues(array $values): int
    {
        return array_reduce($values, function($sumOfPotency, $item) {
            $sumOfPotency += pow(intval($item), 2);
            return $sumOfPotency;
        });
    }
}