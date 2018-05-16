<?php

class constructorExample
{
  // PHP4 style constructor - deprecated in PHP7
  public function constructorExample() {
    echo "Constructed!";
  }
}
$test = new constructorExample;

// If we construct an object from this class, we don’t receive a deprecation warning.
// Why not? PHP 7.1 looks for a modern style constructor first, and if it is present, it will call
// it. If there is no modern constructor, PHP 7.1 will look for a deprecated constructor and if
// it is present it will generate a warning and call it.