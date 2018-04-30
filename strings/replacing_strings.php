<?php

echo str_replace('foo', 'bar', 'Delicious food'); //Delicious bard

echo str_ireplace('foo', 'bar', 'Delicious foOd'); //Delicious bard

echo PHP_EOL;

$string = "I like black hot coffe";
$search = ['black', 'coffe'];
$replace = ['green', 'tea'];

echo str_replace($search, $replace, $string); // I like green hot tea

echo PHP_EOL;

echo substr_replace($string, 'cock', 13);

echo PHP_EOL;

$address = "09479 Caçadór Nãmbiru";
$address = strtr($address, "çóã", "coa");

echo $address;
