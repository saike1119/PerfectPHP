<?php
$array = array(1, 2, 3, 4, 5);
var_dump(array_map(create_function('$v', 'return $v * 2;'), $array));

$array2 = array(1, 2, 3, 4, 5);
var_dump(array_map(function ($v) {
    return $v * 3;
}, $array));