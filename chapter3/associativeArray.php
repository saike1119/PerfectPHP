<?php
$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);
echo $fruits_color['banana'], PHP_EOL;
var_dump($fruits_color);

$fruits_mixed = array(
    'peach',
    'blueberry',
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);
echo $fruits_mixed[1], PHP_EOL;
echo $fruits_mixed['banana'], PHP_EOL;
var_dump($fruits_mixed);

$array = array(
    4, //keyが1
    5, //keyが2
    1 => 'これは1', //keyが1の要素を上書き
    'string_key' => '最初の定義',
    'string_key' => '次の定義', //要素が上書き
);
var_dump($array);