<?php

$text1 = 'My first text';

$concat = 'Start message - ' . $text1 . ' - End message';
$sprintfText = sprintf('Start message - %s - End message', $text1);

echo '$concat = ' . $concat . PHP_EOL;
echo '$sprintfText = ' . $sprintfText . PHP_EOL;


echo PHP_EOL . 'Explode : ' . PHP_EOL;
$explodeArray = explode(' ', $sprintfText);
echo '$explodeArray = ' . print_r($explodeArray, true) . PHP_EOL;

$implodeText = implode('_', $explodeArray);
echo '$implodeText = ' . print_r($implodeText, true) . PHP_EOL;
