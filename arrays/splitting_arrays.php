<?php

//array_chunk Split an array into chunks
//array_column Return a single column from an input array, for example, an array of
//database query results.
//array_slice Extract an array of the array.
//array_splice Return a slice of the array and replace it with something else in the
//original array (the argument is called by reference). 15
//extract Create variables named for the keys of an array that contain the
//values from the array. Using this function can lead to murky code
//because it’s not immediately clear where a variable is defined.
//array_rand Pick random keys of an array.

$input = [1,2,3];
$replacement = ['hello', 'world'];
//$slice contains the piece we extract

$slice = array_splice($input, 1, 1, $replacement);
//$input is passed by reference and so is amended

print_r($slice);

extract(['ola' => 'mundo']);

var_dump($ola);exit;
