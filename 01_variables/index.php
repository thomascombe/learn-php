<?php

$variable = 1;
$variable2 = 7;
$text = 'my text';

$result = $variable + $variable2;

#$stringResult = $text + $variable;
$stringResult = $text . $variable;

echo '$result = ' . $result . PHP_EOL;
echo '$stringResult = ' . $stringResult . PHP_EOL;

echo PHP_EOL . 'By Copy : ' . PHP_EOL;
$variableCopy = $variable;
echo '$variableCopy = ' . $variableCopy . PHP_EOL;
$variable = 2;
echo '$variableCopy = ' . $variableCopy . PHP_EOL;

echo PHP_EOL . 'By Reference : ' . PHP_EOL;
$variableCopy = &$variable;
echo '$variableCopy = ' . $variableCopy . PHP_EOL;
$variable = 3;
echo '$variableCopy = ' . $variableCopy . PHP_EOL;
