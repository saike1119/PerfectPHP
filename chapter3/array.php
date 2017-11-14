<?php
$fruits = array(
    'apple',
    'banana',
    'orange',
);
echo $fruits[0], PHP_EOL;
var_dump($fruits);

$fruits2[] = 'apple';
$fruits2[] = 'banana';
$fruits2[] = 'orange';
echo $fruits2[1], PHP_EOL;
var_dump($fruits2);

$one = array(
    1,
    1.0,
    '1',
);
echo $one[1], PHP_EOL;
var_dump($one);
