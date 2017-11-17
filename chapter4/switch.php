<?php

$hour = date('G');
$hour = 22;
var_dump($hour);
//if ($hour === '6') {
//    echo '朝の6時です、おはようございます。', PHP_EOL;
//} elseif ($hour === '12') {
//    echo '正午です、こんにちは。', PHP_EOL;
//} elseif ($hour === '15') {
//    echo '3時のおやつの時間です。', PHP_EOL;
//} else {
//    echo 'どうも！', PHP_EOL;
//}

switch ($hour) {
    case '6':
        echo '朝の6時です、おはようございます。', PHP_EOL;
        break;
    case '12':
        echo '正午です、こんにちは。', PHP_EOL;
        break;
    case '15':
        echo '3時のおやつの時間です。', PHP_EOL;
        break;
    case '22':
    case '23':
    case '0':
        echo 'もう寝る時間ですよ。', PHP_EOL;
        break;
    default:
        echo 'どうも！', PHP_EOL;
        break;
}