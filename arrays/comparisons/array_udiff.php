<?php

$birds = ['duck', 'chicken', 'goose'];
$net = ['Dog', 'Cat', 'Chicken', 'Goose', 'Hamster'];
$diff = array_udiff($net, $birds, function ($a, $b) {
    $a = strtolower($a);
    $b = strtolower($b);

    if ($a < $b) {
        return -1;
    } else if ($a > $b) {
        return 1;
    } else {
        return 0;
    }
});

print_r($diff);

//array_udiff() will walk through array_values($a) and array_values($b) and compare each value by 
//using the passed in callback function.
//To put it another way, array_udiff() compares $a[0] to $b[0], $b[1], $b[2], and $b[3] 
//using the provided callback function.  If the callback returns zero for any of the comparisons 
//then $a[0] will not be in the returned array from array_udiff().  I
//t then compares $a[1] to $b[0], $b[1], $b[2], and $b[3].  
//Then, finally, $a[2] to $b[0], $b[1], $b[2], and $b[3].
