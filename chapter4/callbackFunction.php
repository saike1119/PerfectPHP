<?php
$array = array(1, 1.5, "2", true);
$new_array = array_map('strval', $array);
foreach ($new_array as $value) {
    echo $value, PHP_EOL;
}
