<?php

$a = 50; //0b110010
$b = 25; //0b011001
$c = 50 & 25; //0b010000

echo 0b010000 . '<br>';

echo $c;

echo '<br>';

$a = 50; //0b00110010
echo $a >> 1; //0b00011001

echo $a << 1; //0b01100100

echo '<br>';

echo 0b01100100;

echo '<br>';

echo base_convert(50, 10, 2) . PHP_EOL;

$a = 50; //0b00110010

echo '<br>';

echo ~50;

echo '<br>';

echo base_convert(-51, 10, 2); //
