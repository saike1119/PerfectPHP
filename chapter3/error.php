<?php
$var = @$_GET['foo']; //@をつけているからエラーを抑制する
var_dump($var);