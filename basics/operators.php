<?php

//When compared to a scalar variable, both an object and an array will be considered
//greater than the scalar.

$a = [1];
$b = 100;

echo $a <=> $b;

$dbConnection = @mysqli_connect(); //suppress error messages

echo '<br>';

//This is th e equivalent of echo shell_exec('whoami')
echo `whoami`;
