<?php

$a = ['a' => 'hello', 'b' => 'world'];
$b = ['a' => 'goodbye', 'c' => 'cruel'];

echo implode(' ', $a + $b);

// $a + $b      Union $b is appended to $a. If a key exists in both arrays,
// then the value from $a is placed into the union.
// $a == $b     Equality        TRUE if $a and $b have the same key-value pairs
// $a === $b    Identity        TRUE if $a and $b have the same key-value pairs, of
// the same types, and in the same order.
// $a != $b     Inequality      TRUE if $a is not equal to $b.
// $a <> $b     Inequality      TRUE if $a is not equal to $b.
// $a !== $b    Non-identity    TRUE if $a is not identical to $b.

echo PHP_EOL;

$a = ['a', 'b', '1'];
$b = ['a', 'b', 1];
$c = ['1', 'b', 'a'];
$d = [2 => 1, 0 => 'a', 1 => 'b'];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a == $c);
var_dump($a == $d);
var_dump($a === $d);
