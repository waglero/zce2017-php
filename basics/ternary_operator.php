<?php

$a = 'foo';
$b = (isset($a)) ? 'true' : 'false';
echo $b;    // true

$a = true;
$b = $a ?: 'foo';
echo $b;   // 1
//This shortened version of the ternary operator is not suitable for testing if a variable
//exists, as the interpreter will throw a warning in this case.

// Long form ternary syntax
$sortDirection = (isset($_GET['sort_dir'])) ? $_GET['sort_dir'] : 'ASC';

$sortDirection = $_GET['sort_dir'] ?? 'ASC';

$sortDirection = $_GET['sort_dir'] ?? $defaultSortDir ?? 'ASC';

$sortDirection = $_GET['sort_dir'] ?: 'ASC'; //notice
