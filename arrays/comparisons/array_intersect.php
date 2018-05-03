<?php

$birds = ['duck', 'chicken', 'goose'];
$net = ['dog', 'cat', 'chicken', 'goose', 'hamster'];
print_r(array_intersect($net, $birds));
print_r(array_intersect_assoc($net, $birds)); //different indexes
