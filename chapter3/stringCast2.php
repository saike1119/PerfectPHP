<?php
if (!isset($argv[1])) {
    exit;
}

//$num = (intval($argv[1]));
$num = $argv[1];
if ($num == 100) { //厳密な比較は === をする
    echo "num is 100", PHP_EOL;
} else {
    echo "num is not 100", PHP_EOL;
}
