<?php

/********************************
 * Arrays
 */

// All arrays in PHP are associative arrays (hashmaps in some languages)

// Works with all PHP versions
$associative = array('One' => 1, 'Two' => 2, 'Three' => 3);

// PHP 5.4 introduced a new syntax
$associative = ['One' => 1, 'Two' => 2, 'Three' => 3];

echo $associative['One']; // prints 1

// Add an element to an associative array
$associative['Four'] = 4;

// List literals implicitly assign integer keys
$array = ['One', 'Two', 'Three'];
echo $array[0]; // => "One"

// Add an element to the end of an array
$array[] = 'Four';
// or
array_push($array, 'Five');

// Remove element from array
unset($array[3]);

// Copy an array
$copy = $array;
$copy['One'] = 10;
$isSame = $copy['One'] === $array['One']; // it is false!

// Copy an array by reference
$copy2 = &$array;
$copy2['One'] = 10;
$isSame = $copy2['One'] === $array['One']; // it is true!

// A lot a PHP built-in functions!
// See: https://www.php.net/manual/fr/ref.array.php
// Some useful functions:

echo 'count($array) = ' . count($array) . PHP_EOL;
echo 'reset($array) = ' . reset($array) . PHP_EOL;
echo 'end($array) = ' . end($array) . PHP_EOL;

echo PHP_EOL . 'Push : ' . PHP_EOL;

array_push($array, 'grapes');
echo '$array = ' . print_r($array, true) . PHP_EOL;
$result = array_pop($array);
echo '$result = ' . $result . PHP_EOL;
echo '$array = ' . print_r($array, true) . PHP_EOL;

echo PHP_EOL . 'Merge : ' . PHP_EOL;

echo '$copy = ' . print_r($copy, true) . PHP_EOL;
$arrayMerged = array_merge($copy, $array);
echo '$arrayMerged = ' . print_r($arrayMerged, true) . PHP_EOL;

echo PHP_EOL . 'Array Map : ' . PHP_EOL;

$arrayMap = array_map(
    function ($item) {
        return sprintf('map : %s', $item);
    },
    $arrayMerged
);
echo '$arrayMap = ' . print_r($arrayMap, true) . PHP_EOL;

$arrayFilter = array_filter(
    $arrayMerged,
    function ($item) {
        return $item > 0;
    }
);
