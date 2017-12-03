<?php

$a = 10;
$c = 20;
$ref =& $a;
$ref =& $c;
$ref = 30;
echo $a, PHP_EOL;
echo $c, PHP_EOL;
echo $ref, PHP_EOL;

function array_pass($array)
{
    $array[0] *= 2;
    $array[1] *= 2;
}

function array_pass_ref(&$array)
{
    $array[0] *= 2;
    $array[1] *= 2;
}

$array = array($a, &$c);
array_pass($array);

echo $a, PHP_EOL;
echo $c, PHP_EOL;

$array = array($a, $c);
array_pass_ref($array);

echo $a, PHP_EOL;
echo $c, PHP_EOL;

$x = 1;
$y = $x;
$z = 11;

echo $x, PHP_EOL;
echo $y, PHP_EOL;
echo $z, PHP_EOL;

