<?php

$fp = fopen(__FILE__, 'r');

fseek($fp, __COMPILER_HALT_OFFSET__);

var_dump(stream_get_contents($fp));

__halt_compiler();

//Assume you have one script with some php code and lots and lots of binary clutter.

//<?php doStuff(); __halt_compliler(); [BIG_BINARY_MESS]

//then you want the compiler to NOT try to parse the binary because if there is <? somewhere in the binary it would break.

//The point is beeing able to just ship one file with binary data and php code.
//
//
//Another example:

//This will get parsed as valid php and execute just fine:

//<?php $a = 1; echo $a; __halt_compiler(); §RW$FG$%ZDS$TSG$TSZ%U(); §$"§%"§$!!();

//To access the data:

//<?php
//$file = fopen(__FILE__, 'rb');
// Go to the end of the __halt_compiler();
//fseek($file, __COMPILER_HALT_OFFSET__);
//echo stream_get_contents($file);
//__halt_compiler(); §RW$FG$%ZDS$TSG$TSZ%U(); §$"§%"§$!!();

//This will output §RW$FG$%ZDS$TSG$TSZ%U(); §$"§%"§$!!();
//
//
//To anyone thinking "but you could just call exit/die()": 
//this function gets checked even before the syntax, 
//so even parse errors after that "function" call will be ignored.
//
//https://stackoverflow.com/questions/5270486/whats-halt-compiler-in-php-for