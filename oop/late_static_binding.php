<?php

class A {
    public static function foo() {
        echo static::who();
    }
    public static function who() {
        return 'A';
    }
}
class B extends A {
    public static function test() {
        A::foo();
        parent::foo();
        self::foo();
    }
}
class C extends B {
    public static function who() {
        echo 'C';
    }
}
C::test(); // ACC