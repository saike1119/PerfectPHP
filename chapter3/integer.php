<?php
$int1 = 1; //正の整数
$int2 = -1; //負の整数
$int3 = 011; //8進表記(9)
$int4 = 0xff; //16進表記(255)
$int5 = PHP_INT_MAX; //整数型の最大値
$int6 = PHP_INT_MAX + 1; //整数型の最大値を超えたら浮動小数点数にキャストする

$int7 = intval("1");
$int8 = (int)"1";

var_dump($int1, $int2, $int3, $int4, $int5, $int6, $int7, $int8);