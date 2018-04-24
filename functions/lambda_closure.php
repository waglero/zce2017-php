<?php

//A lambda in PHP is an anonymous function that can be stored as a variable.

$lambda = function ($a, $b) {
    echo $a + $b;
};

echo gettype($lambda) . '<br>';
echo (int) is_callable($lambda) . '<br>';
echo get_class($lambda). '<br>';

//A closure in PHP is an anonymous function that encapsulates variables so they can
//be used once their original references are out of scope. Another way of putting this is to say
//that the anonymous function “closes over” variables that are in the scope it was defined in.

//Lambda variables and closures can both be used in functions that accept a callable.

$string = "Hello world";
$string2 = 'test';
$closure = function () use ($string, $string2) {
    echo $string . '<br>';
};

$closure();

$a = 'Some string';
//early binding (default)
$b = function () use ($a) {
    echo $a;
};
$a = "Hello World";
$b();

$a = 'some string';
//late binding (reference)
$b = function () use (&$a) {
    echo $a;
};

$a = 'Hello World';
$b();