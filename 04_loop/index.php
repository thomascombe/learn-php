<?php

$odd_numbers = [1,3,5,7,9];

for ($i = 0; $i < count($odd_numbers); $i++) {
    $odd_number = $odd_numbers[$i];
    echo $odd_numbers[$i] . PHP_EOL;
    $odd_number *= 2;
//    $odd_numbers[$i] *= 2;
}

echo '$odd_numbers = ' . print_r($odd_numbers, true) . PHP_EOL;

echo PHP_EOL . 'Foreach' . PHP_EOL;

$odd_numbers = [1,3,5,7,9];
foreach ($odd_numbers as $odd_number) {
    echo $odd_number . PHP_EOL;
    $odd_number *= 2;
}
echo '$odd_numbers = ' . print_r($odd_numbers, true) . PHP_EOL;

