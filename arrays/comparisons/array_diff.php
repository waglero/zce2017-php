<?php

$requiredKeys = ['username', 'password', 'csrf_token'];
$missingKeys = array_diff($requiredKeys, array_keys($_POST));
if (count($missingKeys)) {
    //throw new UnexpectedValueException('You need to provide [' . print_r($missingKeys, true) . ']');
}

$a = ['a' => 'apple', 'b' => 'banana'];
$b = ['a' => 'apple', 'd' => 'banana'];

print_r(array_diff($a, $b));
print_r(array_diff_assoc($a, $b));
