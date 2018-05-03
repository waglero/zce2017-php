<?php

$stack = ['one', 'two', 'three', 'four'];
$fruit = array_shift($stack);
print_r($fruit);

print_r($stack);

array_unshift($stack, 'one');

print_r($stack);

array_pop($stack);

print_r($stack);

array_push($stack, 'four');

print_r($stack);
