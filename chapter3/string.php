<?php
$string1 = 'this is string';
$string2 = "this is string";
$string3 = 'hi, $string \n';
$string4 = "hi, $string2 \n";

var_dump($string1, $string2, $string3, $string4);

$age = 15;

//$ageという変数だが、どこまでが変数だか不明
echo "$ageyears old.", PHP_EOL;

//波かっこで変数名を囲む
echo "${$age}years old.", PHP_EOL;