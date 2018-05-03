<?php

// i    The expression is case-insensitive.
// m    Multiline mode. Strings can span multiple lines and newline characters
//      are ignored. Instead of matching the beginning and end of the string, the
// ^    and $ symbols will match the beginning and end of the line.
// s    The . meta-character will also match newlines.
// x    Ignore whitespace unless you escape it.
// e    This causes PHP code to be evaluated and is highly discouraged. It is
//      deprecated as of PHP 5.5 and in PHP 7 will generate a warning, as it is no
//      longer supported.
// U    This makes the quantifiers lazy by default and using the ? after them
//      instead marks them as greedy.
// u    This tells PHP to treat the pattern and string as being UTF-8
