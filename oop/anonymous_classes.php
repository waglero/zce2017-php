<?php

$object = new class('argument') {
    public function __construct(string $message)
    {
        echo $message;
    }
};

class Test
{

}

$test = new class() extends Test
{
    public function __construct()
    {
        echo "test";
    }
};