<?php

//Class name or Interface The parameter must be an instance of, or a child of, the
//                        specified class or interface.
//self                    The parameter must be an instance of the current class.
//array                   
//bool
//float
//int
//string
//iterable                The parameter must be either an array or an instanceof
//                        traversable.
//callable                The parameter must be a valid callable.

//Setting strict mode is done per file.

//declare(strict_types = 1);
function sayHello(string $name)
{
    echo getType($name);
}

sayHello(100);

echo '<br>';

function myFunc(?MyObject $myObj)
{
    echo "hello world";
}

myFunc(null);
//myFunc();

echo '<br>';

function myFunc2()
{
    foreach (func_get_args() as $arg => $value) {
        echo "$arg is $value<br>" . PHP_EOL;
    }
}

myFunc2('variable', 3, 'parameters');


function myFunc3($data)
{
    $data = 'Changed';
    echo func_get_arg(0); //Only in PHP 7
}

myFunc3('Data'); //Changed


//variadics

function parameterTypeExample($required, $optional = null, ...$variadicParams)
{
    printf(
        'Required: %d; Optional: %d; number of variadic parameters:%d'."\n",
        $required,
        $optional,
        count($variadicParams)
    );
    print_r($variadicParams);
    echo '<br>';
}

echo '<br>';

parameterTypeExample(1);
parameterTypeExample(1, 2);
parameterTypeExample(1, 2, 3);
parameterTypeExample(1, 2, 3, 4);
parameterTypeExample(1, 2, 3, 4, 5);

function addOne($arg)
{
  $arg++;
}
$a = 0;
addOne(&$a);

echo $a;