<?php

echo __LINE__; //The current line number of the PHP script being executed;

echo '<br>';

echo __FILE__; //The fully resolved (including symlinks) name and path of the file being executed

echo '<br>';

echo __DIR__; //The directory of the file. If used inside an include,
//the directory of the included file is returned. 
//This is equivalent to dirname(__FILE__). 
//This directory name does not have a trailing slash unless it is the root directory. 

echo __CLASS__; //The name of the class being executed

echo '<br>';

echo __METHOD__; //The name of the class method being executed

echo '<br>';

echo __FUNCTION__; //The name of the function being executed

echo '<br>';

echo __TRAIT__; //The namespace and name of the trait that the code is running in

echo '<br>';

echo __NAMESPACE__; //The current namespace
