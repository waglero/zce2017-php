<?php

$glob = "Global variable";
function myFunction() {
    global $glob; // first method
    $glob = $GLOBALS['glob']; // second method
    $glob = "Changed";
}
myFunction();
echo $glob;  // Changed