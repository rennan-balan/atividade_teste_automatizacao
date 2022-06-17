<?php
namespace TestesAutomatizados\FreightCalculation\Entities;

class Product {
    private string $name;

    private float $price;

    function __construct() { }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
