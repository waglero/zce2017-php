<?php

$subject = "test@example.com";
$pattern = "/^(?<username>\w+)@(?<domain>\w+).(?<tld>\w+)/";
$matches = [];
if (preg_match($pattern, $subject, $matches)) {
    var_dump($matches);
}
