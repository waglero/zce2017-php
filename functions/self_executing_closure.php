<?php

(function () {
    echo 'Self-executing anonymous function';
    echo $definedInClosure = 'Variable set';
})();

var_dump(isset($definedInClosure)); //bool(false)