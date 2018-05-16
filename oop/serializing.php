<?php

class A {

    //when unserializes
    public function __wakeup()
    {
        echo "Good morning";
    }

    //when serializes
    // public function __sleep()
    // {

    // }
}

class B {

}

$a = new A();
$stored = serialize($a);
unset($a);

//this works because the class name is allowed
$a = unserialize($stored, ['allowed_classes' => [A::class]]);
//this creates __PHP_Imcomplete_Class because the class doesnt match
$b = unserialize($stored, ['allowed_classes' => [B::class]]);
//this creates __PHP_Imcomplete_Class because no class are allowed
$c = unserialize($stored, ['allowed_classes' => false]);
//this works because all classes are allowed
$d = unserialize($stored, ['allowed_classes' => true]);
//this generates a warning because invalid type parameter
$e = unserialize($stored, ['allowed_classes' => 'Not boolean or array']);
