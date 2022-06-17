<?php
namespace TestesAutomatizados\FreightCalculation\Entities;

use TestesAutomatizados\FreightCalculation\Entities\Product;

class Cart {
    private User $user;
    
    private array $orderList;
    
    function __construct() 
    { 
        $this->orderList = [];
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function addProduct(Product $product, int $quantity): void
    {
        $productIndex = $this->getOrderIndex($product);
        $productIndex == -1 ? 
            $this->orderList[] = ['product' => $product, 'quantity' => $quantity] : 
            $this->orderList[$productIndex]['quantity'] += $quantity;
    }

    public function removeProduct(Product $product, int $quantity): void
    {
        $productIndex = $this->getOrderIndex($product); 
        if($productIndex != -1) {            
            $this->orderList[$productIndex]['quantity'] - $quantity < 1 ? 
                array_splice($this->orderList, $productIndex, 1) : 
                $this->orderList[$productIndex]['quantity'] -= $quantity;
        }
    }

    public function getOrderList(): array
    {
        return $this->orderList;
    }

    private function getOrderIndex(Product $product): int
    {
        foreach ($this->orderList as $key => $order) {
            if($order['product']->getName() == $product->getName()) {
                return $key;
            }
        }
        return -1;
    }

    public function total(): float
    {
        return empty($this->orderList) ? 0 : array_reduce($this->orderList, function($sum, $order) {
            $sum += $order['product']->getPrice() * $order['quantity'];
            return $sum;
        });    
    }
}
