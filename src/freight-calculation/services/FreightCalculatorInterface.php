<?php
namespace TestesAutomatizados\FreightCalculation\Services;

interface FreightCalculatorInterface {
    public function calculate(string $cep): float;
}