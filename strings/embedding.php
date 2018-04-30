<?php

$dogfood = ['Pellets'];
$catfood = new stdClass();
$catfood->favorite = "Cheeseburger";
echo "$dogfood[0]" . "<br>";
echo "$catfood->favorite";

echo '<br>';

$burger = "Cheeseburger";
echo "I can haz {$burger}";
echo "I can haz ${burger}";
echo "I can haz $burgers";
echo "I can haz {$burger}s";
echo "I can haz { $burger }";

echo '<br>';

$catfood = new stdClass;
$catfood->name = "Cheeseburgers";
$cat = new stdClass;
$cat->canhaz = [$catfood];
echo "$cat->canhaz[0]->name";
echo "{$cat->canhaz[0]->name}";
