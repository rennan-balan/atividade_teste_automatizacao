<?php
namespace TestesAutomatizados\FreightCalculation\Entities;

class User {
    private string $name;
    private string $cep;

    function __construct() { }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }
}
