PHPスクリプトを実行します。

<?php

/*
 * サンプルのPHPスクリプトです。
 */

$number = rand(); //乱数を生成します
if ($number % 2 == 0) {
    echo $number, 'は偶数です。', PHP_EOL;
} else {
    echo $number, 'は奇数です。', PHP_EOL;
}
?>

PHPスクリプト終わり。
