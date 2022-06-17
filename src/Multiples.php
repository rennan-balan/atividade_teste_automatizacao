<?php
namespace TestesAutomatizados;

class Multiples {

    private const maxValue = 1000;
    
    public static function sumMultipleXOrY(int $x, int $y): int
    {
        $sum = 0;
        for($i = 1; $i < self::maxValue; $i++) {
            $sum = self::isValueDivisibleByXOrY($i, $x, $y) ? $sum + $i : $sum;
        }
        return $sum;
    }

    public static function sumMultipleXAndY(int $x, int $y): int
    {
        $sum = 0;
        for($i = 1; $i < self::maxValue; $i++) {
            $sum = self::isValueDivisibleByXAndY($i, $x, $y) ? $sum + $i : $sum;
        }
        return $sum;
    }
    
    public static function sumMultipleXOrYAndZ(int $x, int $y, int $z): int
    {
        $sum = 0;
        for($i = 1; $i < self::maxValue; $i++) {
            $sum = (self::isValueDivisibleByXOrY($i, $x, $y) && self::isValueDivisible($i, $z)) ? $sum + $i : $sum;
        }
        return $sum;
    }

    public static function isValueDivisible(int $dividend, int $divider): bool
    {
        return $dividend % $divider == 0;
    }

    public static function isValueDivisibleByXOrY(int $dividend, int $x, int $y): bool
    {
        return self::isValueDivisible($dividend, $x) || self::isValueDivisible($dividend, $y);
    }

    public static function isValueDivisibleByXAndY(int $dividend, int $x, int $y): bool
    {
        return self::isValueDivisible($dividend, $x) && self::isValueDivisible($dividend, $y);
    }
}
