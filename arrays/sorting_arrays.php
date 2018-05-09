<?php

//They follow a naming convention whereby the base sort function is prefixed with r
//for reverse and a for associative.
//All sort functions take a reference to the array as their parameter and return a
//Boolean value indicating success or failure.

// sort     Sorting arrays alphabetically
// rsort    Reverse alphabetical sort
// asort    Associative sort
// arsort   Reversed associative sort
// ksort    Key sort
// krsort   Reverse key sort
// usort    User-defined comparison function for sorting
// shuffle  Pseudo-random sort

// SORT_REGULAR     Compare items normally; don't change types.
// SORT_NUMERIC     Cast items to numeric values and then compare.
// SORT_STRING      Cast items to strings and then compare.
// SORT_LOCALE_STRING   Use locale settings to cast items to strings.
// SORT NATURAL     Use natural order sorting, like the function natsort().
// SORT_FLAG_CASE   Can be combined with SORT_STRING and SORT_NATURAL to
// sort strings case-insensitively.

// The function natsort() does not take flags and is the same as sort() with the
// SORT_NATURAL flag set.

$a = $b = explode(' ', 'a1 a2 a10 a11 a12 a20 a21');
shuffle($a);
shuffle($b);

natsort($a);
sort($b);
print_r($a);
print_r($b);
