<?php

function foo()
{
    echo 'Foo';
}

$var = 'foo';
$var();

//Language constructs such as we saw earlier are not functions. You cannot use
//them as variable functions.
//