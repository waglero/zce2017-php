<?php

$arr = ['a', 'b', 'c', 'd', 'e', 'f'];
$str = 'abcdef';

echo strpos($str, 'c') . PHP_EOL;
echo array_search('c', $arr) . PHP_EOL;

//For string search functions, the order is always $haystack then $needle
//For array search functions, the order is always $needle then $haystack


$string = 'abcdef';
if (strpos($string, 'a') == false) {
    echo "False negative!" . PHP_EOL;
}
