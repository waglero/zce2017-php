<?php

$minutes = 60;
$timeUnit = "an hour";
printf("There are %u minutes in %s", $minutes, $timeUnit);

echo PHP_EOL;

//Set locale to Dutch
setlocale(LC_ALL, 'nl_NL');
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

echo PHP_EOL;

echo `locale -a`;
