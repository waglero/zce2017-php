<?php

//Using array cursors

//reset Moves the cursor to the beginning of the array 17
//end Moves the cursor to the end of the array
//next Advances the cursor 18
//prev Advances the cursor
//current Returns the value of the element the cursor points at
//key Returns the key of the element the cursor points at

$a = [1, 2, 3];

array_walk($a, function ($val, $ind) {
    echo "$ind => $val" . PHP_EOL;
});

$arr = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry'
];

array_walk($arr, function (&$value, $key) {
    $value = strtoupper($value);
});

//array_walk($arr, 'strtoupper'); warming

print_r($arr);
