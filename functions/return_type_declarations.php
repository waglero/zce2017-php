<?php

//declare(strict_types=1);

function getFullName(string $firstName, string $lastName): string
{
    return 123;
}

$name = getFullName('Mary', 'Moon');
echo gettype($name);

function sayHello(): void
{
    echo "Hello world";
}

var_dump(sayHello()); //null

function &getValue()
{
    $b = 'a';
    return $b;
}

$a = 'teste';
$a = &getValue();
echo $a;
