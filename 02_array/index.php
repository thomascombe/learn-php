<?php

$simpleArray = [ 'orange', 'banana', 'apple' ];

echo '$simpleArray[1] = ' . $simpleArray[1] . PHP_EOL;

$simpleArray[1] = 'strawberry';

echo '$simpleArray = ' . print_r($simpleArray, true) . PHP_EOL;


echo PHP_EOL . 'By Copy : ' . PHP_EOL;
$copyArray = $simpleArray;

$simpleArray[] = 'pear';

echo '$simpleArray = ' . print_r($simpleArray, true) . PHP_EOL;
echo '$copyArray = ' . print_r($copyArray, true) . PHP_EOL;

echo PHP_EOL . 'By Reference : ' . PHP_EOL;
$copyArray = &$simpleArray;

$simpleArray[] = 'pear';

echo '$simpleArray = ' . print_r($simpleArray, true) . PHP_EOL;
echo '$copyArray = ' . print_r($copyArray, true) . PHP_EOL;

// PHP Helper

echo 'count($simpleArray) = ' . count($simpleArray) . PHP_EOL;
echo 'reset($simpleArray) = ' . reset($simpleArray) . PHP_EOL;
echo 'end($simpleArray) = ' . end($simpleArray) . PHP_EOL;

echo PHP_EOL . 'Push : ' . PHP_EOL;

array_push($simpleArray, 'grapes');
echo '$simpleArray = ' . print_r($simpleArray, true) . PHP_EOL;
$result = array_pop($simpleArray);
echo '$result = ' . $result . PHP_EOL;
echo '$simpleArray = ' . print_r($simpleArray, true) . PHP_EOL;

echo PHP_EOL . 'Merge : ' . PHP_EOL;

echo '$copyArray = ' . print_r($copyArray, true) . PHP_EOL;
$arrayMerged = array_merge($copyArray, $simpleArray);
echo '$arrayMerged = ' . print_r($arrayMerged, true) . PHP_EOL;

echo PHP_EOL . 'Array Map : ' . PHP_EOL;

$arrayMap = array_map(function($item) {
    return sprintf('map : %s', $item);
}, $arrayMerged);
echo '$arrayMap = ' . print_r($arrayMap, true) . PHP_EOL;
