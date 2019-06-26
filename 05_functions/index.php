<?php

function sum(array $numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

$arrayNumbers = [1,2,3,4,5,6,7,8,9,10];
echo 'sum($arrayNumbers) = ' . sum($arrayNumbers) . PHP_EOL;
echo '$arrayNumbers = ' . print_r($arrayNumbers, true). PHP_EOL;
echo '$numbers = ' . print_r($numbers, true). PHP_EOL;

function double(array &$numbers) {
    foreach ($numbers as &$number) {
        $number *= 2;
    }
}

$arrayNumbers = [1,2,3,4,5,6,7,8,9,10];
echo PHP_EOL . 'double($arrayNumbers) = ' . double($arrayNumbers) . PHP_EOL;
echo '$arrayNumbers = ' . print_r($arrayNumbers, true). PHP_EOL;
