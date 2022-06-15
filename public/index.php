<?php
require_once __DIR__ . '/../vendor/autoload.php';

use TestesAutomatizados\Multiples;
use TestesAutomatizados\HappyNumbers;
use TestesAutomatizados\WordsInNumbers;

// echo HappyNumbers::isHappyNumber(7);

// echo "Soma dos múltiplos de 3 OU 5: " . Multiples::sumMultiple3Or5() . 
// "\n Soma dos múltiplos de 3 E 5: " . Multiples::sumMultiple3And5() . 
// "\n Soma dos múltiplos de (3 Ou 5) E 7: " . Multiples::sumMultiple3Or5And7();

$wordsInNumbers = WordsInNumbers::convertWordToNumber('ee');

echo HappyNumbers::isHappyNumber($wordsInNumbers);
echo "\n";
echo Multiples::isValueDivisible($wordsInNumbers, 3);