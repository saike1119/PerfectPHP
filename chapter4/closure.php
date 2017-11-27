<?php
$my_pow = function ($time = 2) {
    return function ($v) use (&$time) {
        return pow($v, $time);
    };
};

$cube = $my_pow(3);
echo $cube(2);