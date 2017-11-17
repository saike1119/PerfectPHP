<?php
$dice = range(1, 100);
var_dump($dice);
shuffle($dice);
foreach ($dice as $value) {
    echo $value, PHP_EOL;
    if ($value === 100) {
        echo '100が出たよ！';
        break;
    }
}