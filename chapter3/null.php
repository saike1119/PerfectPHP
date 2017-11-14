<?php
//返り値を返さない関数の定義
function no_return_func()
{
}

$null_value = no_return_func(); //nullが代入される

var_dump($null_value); //null
$var = 1;
var_dump(isset($var)); //true
$var = null;
var_dump(isset($var)); //false
var_dump($var); //null
unset($var);
var_dump(isset($var)); //false.変数をunset();
var_dump($var); //unsetされたためNoticeが発生する。値はnull