<?php

echo PHP_EOL . 'Array Keys : ' . PHP_EOL;

$array = [
    'category_1' => [
        'name' => 'Category 1',
        'subcategories' => [
            'Subcat 1',
            'Subcat 2',
        ],
    ],
    'category_2' => [
        'name' => 'Category 2',
        'subcategories' => [
            'Subcat 3',
            'Subcat 4',
            'Subcat 5',
        ],
    ]
];
echo '$array = ' . print_r($array, true) . PHP_EOL;
echo "array['category_1']['subcategories'] = " . print_r($array['category_1']['subcategories'], true) . PHP_EOL;
echo 'array_values($array) = ' . print_r(array_values($array), true) . PHP_EOL;
