<?php
$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
);

foreach ($fruits_color as &$color) {
    $color = 'black';
}

var_dump($fruits_color);
unset($color); //要素の参照を解除する
