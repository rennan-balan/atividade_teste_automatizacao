<?php
use TestesAutomatizados\FreightCalculation\Services\CorreiosService;
use TestesAutomatizados\FreightCalculation\Services\CalculationService;
header('Content-type: text/plain');

require_once __DIR__ . '/../vendor/autoload.php';

use TestesAutomatizados\FreightCalculation\Entities\User;
use TestesAutomatizados\FreightCalculation\Entities\Product;
use TestesAutomatizados\FreightCalculation\Entities\Cart;
use TestesAutomatizados\Multiples;
use TestesAutomatizados\HappyNumbers;
use TestesAutomatizados\WordsInNumbers;

echo "Exercício 1 - Múltiplos de 3 ou 5\n";
echo "a) Qual é o valor da soma de todos os números múltiplos de 3 ou 5 de números naturais abaixo de 1000?\n";
echo "R: " . Multiples::sumMultipleXOrY(3, 5);

echo "\nb) Qual é o valor da soma de todos os números múltiplos de 3 e 5 de números naturais abaixo de 1000?\n";
echo "R: " . Multiples::sumMultipleXAndY(3, 5);

echo "\nc) Qual é o valor da soma de todos os números múltiplos de (3 ou 5) e 7 de números naturais abaixo de 1000?\n";
echo "R: " . Multiples::sumMultipleXOrYAndZ(3, 5, 7);
echo "\n----------------------------------------****************************************----------------------------------------\n";
echo "Exercício 2 - Números felizes\n";
$isHappyNumber = 7;
echo $isHappyNumber . " " . HappyNumbers::isHappyNumber(7);
echo "\n----------------------------------------****************************************----------------------------------------\n";
echo "Exercício 3 - Palavras em números\n";
$wordsInNumbers = "Objective";
echo WordsInNumbers::start($wordsInNumbers, 3, 5);
echo "\n----------------------------------------****************************************----------------------------------------\n";
echo "Exercício 4 - Cálculo de Frete\n";

$user = new User();
$user->setName('Rennan');
$user->setCep('87060027');

$product = new Product();
$product->setName('Monitor');
$product->setPrice(20.99);

$product2 = new Product();
$product2->setName('Mouse');
$product2->setPrice(19.99);

$cart = new Cart();
$cart->setUser($user);
$cart->addProduct($product, 1);
$cart->addProduct($product2, 1);
$cart->addProduct($product, 1);
$cart->removeProduct($product, 1);

$calculationService = new CalculationService(new CorreiosService());
$total = $calculationService->total($cart);

echo "Dados do Pedido: \n";
echo "Destinatário: " . $user->getName();
echo "\nCEP: " . $user->getCep();
echo "\nCarrinho de Compras: \n";
foreach ($cart->getOrderList() as $key => $order) {
    echo ($key + 1) . " - Produto: " . $order['product']->getName() 
        . " - Preço unitário: " . $order['product']->getPrice() 
        . " - Quantidade: " . $order['quantity'] . "\n";    
}
echo "Subtotal: " . $cart->total();
echo "\nTotal (Subtotal + Frete): " . $total;
