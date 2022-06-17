<?php
namespace TestesAutomatizados\FreightCalculation\Services;

class CorreiosService implements FreightCalculatorInterface {
    public function calculate(string $cep): float
    {
        return intval($cep) <= 50000000  ? 10.99 : 1.99;
    }
}