<?php

echo "Hello world\r\n";

echo('Hello', 'World'); //error

echo 'Hello', 'World';


//These words have special meaning in PHP. 
//Some of them represent things which look like functions, 
//some look like constants, and so on - but they're not, 
//really: they are language constructs. 
//You cannot use any of the following words as constants, 
//class names, function or method names. 
//Using them as variable names is generally OK, 
//but could lead to confusion.
//
//As of PHP 7.0.0 these keywords are allowed as property, 
//constant, and method names of classes, interfaces and traits, 
//except that class may not be used as constant name. 

__halt_compiler()
abstract
and
array()
as
break
callable (as of PHP 5.4)
case
catch
class
clone
const
continue
declare
default
die()
do
echo
else
elseif
empty()
enddeclare
endfor
endforeach
endif
endswitch
endwhile
eval()
exit()
extends
final
finally (as of PHP 5.5)
for
foreach
function
global
goto (as of PHP 5.3)
if
implements
include
include_once
instanceof
insteadof (as of PHP 5.4)
interface
isset()
list()
namespace (as of PHP 5.3)
new
or
print
private
protected
public
require
require_once
return
static
switch
throw
trait (as of PHP 5.4)
try
unset()
use
var
while
xor
yield (as of PHP 5.5) 

//Compile-time constants
__CLASS__
__DIR__ (as of PHP 5.3)
__FILE__
__FUNCTION__
__LINE__
__METHOD__
__NAMESPACE__ (as of PHP 5.3)
__TRAIT__ (as of PHP 5.4) 

//The reason not to use include_once() and require_once() all the time is a
//performance issue. PHP tracks a list of files that has been included to support the
//functionality of these functions. This requires memory so these functions are rather used
//when they are necessary and not in favor of include or require.