<?php

namespace Foo;

const AVOCADO = 6.02214086; //constante do namespace

define('MOLE', 'hill'); //CONSTANTE GLOBAL

define('Foo\MOLE', 'hill');

$variable = 'a';

//const VARIABLE = $variable; //error 

echo \Foo\AVOCADO;

echo \Foo\MOLE;

define('PI', 3.142);

echo PI;

define('UNITS', ['MILES_CONVERSION' => 1.6, 'INCHES_CONVERSION' => '2.54']);

echo '<br>';

echo '5km is miles in ' . 5 * UNITS['MILES_CONVERSION'];

const MILES_CONVERSION = 1.6;

echo 'There are ' . constant('Foo\MILES_CONVERSION') . ' miles in a kilometer';
