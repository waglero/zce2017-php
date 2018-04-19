<?php

$a = "new string";
$b =& $a;

//variable b points to the variable a
xdebug_debug_zval('a');
xdebug_debug_zval('b');

//change the string and see that the refcount is reset
$b = "changed string";
xdebug_debug_zval('a');
xdebug_debug_zval('b');

//Arrays and Objects
$arr = ['name' => 'Bob', 'age' => 23];
$obj = (object) $arr;
xdebug_debug_zval('arr');
xdebug_debug_zval('obj');
