<?php
$array = array(1, 2, 3, 4, 5);

$add = function ($v1, $v2) {
    return $v1 + $v2;
};

$add2 = function ($value) {
    return $value * 2;
};

echo $add(10, 100);

var_dump(array_map($add2, $array));

$add3 = function ($value) {
    return pow($value, 5);
};

echo $add3(3);