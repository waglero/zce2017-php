<?php

abstract class Paintings
{
    abstract protected function girlDescendingStairs();
    protected function persistenceOfMemory()
    {
        echo "I have an implementation so this is not an abstract method";
    }

    public function __construct()
    {
        echo "I cannot be constructed";
    }
}

// An abstract class cannot be constructed; we cannot create a new object from the
// class Paintings.
// Abstract classes are intended to be extended. A class that extends an abstract class
// must define all the methods that are marked abstract in the parent class. If the child class
// does not implement the methods, they must also be marked as abstract, and so the child
// class will also be abstract.
// When a child class extends an abstract class, it must define the abstract methods
// with either the same or a less restrictive visibility.
// The signature of the methods declared in the child class must match the abstract
// method’s signature. This means that the number and type of required (not optional)
// arguments to the method must be the same.

class Foo extends Paintings
{
    public function girlDescendingStairs() { echo "Whee!"; }
}

$foo = new Foo; //cannot be constructed
$foo->girlDescendingStairs(); //Whee!;