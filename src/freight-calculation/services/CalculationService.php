<?php
namespace TestesAutomatizados\FreightCalculation\Services;
use TestesAutomatizados\FreightCalculation\Entities\Cart;

class CalculationService {
    private FreightCalculatorInterface $freightCalculator;

    private const freightLimitValue = 100;

    function __construct(FreightCalculatorInterface $freightCalculator)
    {
        $this->freightCalculator = $freightCalculator;
    }

    public function total(Cart $cart): float
    {
        return $cart->total() < self::freightLimitValue ? 
            $cart->total() + $this->freightCalculator->calculate($cart->getUser()->getCep()) : 
            $cart->total();
    }
}
