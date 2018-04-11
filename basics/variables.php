<?php

//Scalar types

//Boolean
//Integer
//Float
//String

$a = (boolean)true;
$b = (bool)true;
var_dump($a === $b);

//Strings in PHP are not simply a list of characters. Internally PHP strings contain
//information about their length and are not null terminated. This means that they may
//contain binary information such as an image file that has been read from disk. In other
//words, PHP strings are binary safe.

//Casting

$a = '123';
$a = (int)$a; 
$a = (bool)$a;

//Casting from float to integer does not round the value up or down, but rather
//truncates the decimal portion.

$a = 1234.56;
echo (int)$a;    // 1234 (not 1235)
$a = -1234.56
echo (int)$a;    // -1234

//Some general rules for casting to Boolean are that:
//• Empty arrays and strings are cast to false.
//• Strings always evaluate to Boolean true unless they have a value
//that’s considered “empty” by PHP.
//• Strings containing numbers evaluate to true if the number is
//not zero. Recall that such strings return false when the empty()
//function is called on them.
//• Any integer (or float) that is non-zero is true, so negative
//numbers are true.