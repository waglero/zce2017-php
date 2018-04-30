<?php

$number = 1234.5678;
echo number_format($number) . PHP_EOL;

echo number_format($number, 3) . PHP_EOL;

echo number_format($number, 2, ',', '.') . PHP_EOL;

echo PHP_EOL;

setlocale(LC_MONETARY, 'en_GB');
echo money_format('%.2n', '5000000.123');
echo PHP_EOL;
setlocale(LC_MONETARY, 'da_DK');
echo money_format('%.2n', '5000000.123');
