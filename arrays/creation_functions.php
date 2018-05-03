<?php

$delimiter = ',';
$source = '1, abc, 2, def, 3, ghi';
$limit = -2;

$arr = explode($delimiter, $source, $limit);

print_r($arr);

echo PHP_EOL;

$input = '12345678';
$arr = str_split($input, 3);
print_r($arr);

//preg_split()

echo PHP_EOL;

print_r(array_combine(range(1, 10, 2), range(1, 5)));

echo PHP_EOL;

print_r(array_fill(10, 5, 'five'));

echo PHP_EOL;

$keys = range(1, 10, 2);
$value = 'PHP';

print_r(array_fill_keys($keys, $value));
