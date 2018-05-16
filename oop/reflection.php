<?php

// Class                Used to Inspect
// ReflectionClass      Classes
// ReflectionObject     Objects
// ReflectionMethod     Methods of objects
// ReflectionFunction   Functions like PHP core functions, or user functions
// ReflectionProperty   Properties

$reflectionObject = new ReflectionClass('Exception');
print_r($reflectionObject->getMethods());