<?php

$input = ['a', 'b', 'c'];
$replace = [3 => 'd', '1' => 'q'];
$replaceTwo = [2 => 1, 1.3 => 'Z'];
$output = array_replace($input, $replace, $replaceTwo);
echo implode(', ', $output);

echo PHP_EOL;

$arrOne = [
    0 => 'One o',
    'a' => 'One a',
    'Overwrite' => 'Not empty',
];

$arrTwo = [
    0 => 'Two o',
    1 => 'Two 1',
    'b' => 'Two b',
    'Overwrite' => '',
];

print_r($arrOne + $arrTwo);
print_r(array_merge($arrOne, $arrTwo));

// The array_merge() function reindexes numeric keys, but the
// operator does not.
// The array_merge() function will not overwrite a non-empty
// value with an empty value, but the operator will.
// 