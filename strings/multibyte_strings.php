<?php

$waysToSayHello = [
    'emoji' => "\u{1F44B}",
    'latinchars' => "Hello",
    'accentedChars' => "ça va?"
];

foreach ($waysToSayHello as $method => $string) {
    echo "$method: encondig [" . mb_detect_encoding($string, 'ISO-8859-1') . "]<br>" .
    'enconding [' . mb_detect_encoding($string, ['ASCII', 'UTF-8']) . '] <br>' .
    'strlen [' . strlen($string) . '] <br>' .
    'mb_strlen [' . mb_strlen($string) . '] <br>' .
    'first character[' . $string[0] . ']<br>';
    echo "\r\n";
}
