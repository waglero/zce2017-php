<?php

//PHP_INI_USER    Entry can be set in user scripts (like with ini_set()) or in the Windows registry. Since PHP 5.3, entry can be set in .user.ini
//PHP_INI_PERDIR  Entry can be set in php.ini, .htaccess, httpd.conf or .user.ini (since PHP 5.3)
//PHP_INI_SYSTEM  Entry can be set in php.ini or httpd.conf
//PHP_INI_ALL     Entry can be set anywhere

//https://secure.php.net/manual/en/configuration.changes.modes.php
//https://secure.php.net/manual/en/ini.list.php


print_r(php_ini_scanned_files());

//It is possible to use OS environment variables in your PHP.ini file, using syntax
//like this:
//PHP_MEMORY_LIMIT is taken from environment
//memory_limit = ${PHP_MEMORY_LIMIT}
