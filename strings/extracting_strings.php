<?php

echo substr("abcdef", 2) . PHP_EOL;    // cdef
echo substr("abcdef", -2) . PHP_EOL;   // ef

echo substr('abcdef', 1);
echo substr('abcdef', 1, 3); //bcd
echo substr('abcdef', 0, 4); //ancd
echo substr('abcdef', 0, 8); //abcdef
echo substr('abcdef', -1, 1); //f
