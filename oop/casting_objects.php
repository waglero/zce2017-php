<?php

$array = [
    'key' => 'value',
    'nested_array' => [
        'another_key' => 'different_value'
    ]
];

$object = (object) $array;
var_dump($object);

class User
{
    private $firstName = 'Example';
    private $lastName = 'User';

    public function __toString()
    {
        return $this->firstName;
    }
}

$user = new User;
echo $user;