<?php
//Callables were introduced as a type hint for functions in PHP 5.4
//They are callbacks that some functions, for example usort(), accept.
//A callable for a function such as usort() can be one of the following:
//• An inline anonymous function
//• A lambda or closure variable
//• A string denoting a PHP function (but not language constructs)
//• A string denoting a user-defined function
//• An array containing an instance of an object in the first element,
//and the string name of the function to call in the second element
//• A string containing the name of a static method in a class
//(PHP 5.2.3+)
//
//You can’t use a language construct as a callable.