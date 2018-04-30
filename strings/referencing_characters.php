<?php

$hello = "world";
echo $hello[0];
echo $hello{1};

$test = 'çao';
echo $test[0];

$hello = "world";
$hello[10] = "*";
echo $hello; //  world     *
