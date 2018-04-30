<?php

$a = "PHP";
$b = "developer";

if ($a > $b) {
    echo "$a > $b";
} else {
    echo "$a < $b";
}

//PHP uses the ASCII value of the character to
//make the comparison. Lowercase letters have a higher ASCII value than capitals


$a = "12 o'clock";
$b = 12.00;
if ($a == $b) {
    echo "the mouse ran up the clock";
}

echo '<br>';

$a = "PHP";
$b = "developer";
$comparison = strcmp($a, $b);
echo $comparison . PHP_EOL;
$caseInsensitive = strcasecmp($a, $b);
echo $caseInsensitive . PHP_EOL;

echo '<br>';

$test1 = 'aaa';
$test2 = 'aab';

echo similar_text($test1, $test2);

//levenshtein()
//soundex()
//metaphone()
//