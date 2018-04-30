<?php

echo <<<HEREDOC
    This is a heredoc, note:
    1) the captalization of the tag
    2) the tag name follows variable naming rules
    3) where the closing tag is
HEREDOC;

echo "<br>";

echo <<<'NOWDOC'
    This is a nowdoc string, note:
    1) Single quotes around the label
    2) Variables will not be evaluated
    3) Control characters will not be evaluated
NOWDOC;
