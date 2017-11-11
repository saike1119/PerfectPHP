<?php
$foo = 1;

function some_function()
{
    $foo = 10; //ローカルスコープなので$fooは新しい変数扱い
    global $foo;
    echo $foo, PHP_EOL;
    $bar = 20;
}

some_function();

//echo $foo,PHP_EOL;
echo $bar, PHP_EOL; //定義されていないよというエラー