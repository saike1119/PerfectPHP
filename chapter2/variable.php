<?php
$var = 1;
$VAR = 2;
$var3 = 3;
$_var = 4;
$var_var = 5;
//$2var = 6; //数字が先頭にきたらいけない

var_dump(isset($var));
var_dump(isset($var1));

$var_name = 'var_var';
echo $$var_name, PHP_EOL;