<?php

$a = true;

$b = false;

$truth = $a and $b;
//true 
//This happens because the logical operators and and or have lower priority than the
//equality operator =

$pravda = $a && $b; //false

assert($truth == $pravda);
