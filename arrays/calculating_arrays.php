<?php

// array_count_values How many times each unique value in the array appears
// array_product The product of all the values in the array
// array_sum The sum of all the values in the array
// count How many elements there are in the array
// sizeof This is an alias of count()

$a = ['1', '2', '3', '4'];

$count = array_count_values($a);

print_r($count);

$product = array_product($a);

print_r($product);
