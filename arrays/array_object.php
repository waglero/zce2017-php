<?php

$fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];

$fruitArrayObject = new ArrayObject($fruits);
$fruitArrayObject->ksort();
foreach ($fruitArrayObject as $key => $value) {
    echo "$key => $value\n";
}

// ArrayObject::STD_PROP_LIST Properties of the object have their normal
// functionality when accessed as a list (var_dump,
// foreach, etc.).
// ArrayObject::ARRAY_AS_PROPS Entries can be accessed as properties (read and
// write)

$fruits = ['lemons' => 1, 'oranges' => 4, 'bananas' => 5, 'apples' => 10];

$fruitsArrayObject = new ArrayObject($fruits);

var_dump($fruitsArrayObject->lemons);
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);
var_dump($fruitsArrayObject->lemons);
