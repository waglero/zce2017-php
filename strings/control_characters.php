<?php

// \n   Line feed
// \r   Carriage return
// \t   Tab
// \v   Vertical tab
// \e   Escape
// \f   Form feed
// \\   Backslash
// \$   Dollar symbol
// [0-7]{1,3}   Sequences matching this regular expression are in octal
// notation
// \x[0-9A-Fa-f]{1,2}   Matching sequences are in hexadecimal notation
// \u{{0-9a-f}{1,6}}    Matching sequences are a Unicode codepoint, which will be
// output to the string as that codepoints UTF-8 representation


echo "\u{1F418}";