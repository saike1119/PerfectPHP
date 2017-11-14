<?php

class SomeClass
{

}

$a = new SomeClass();

if ($a instanceof SomeClass) {
    echo '$aはSomeClassのインスタンスです', PHP_EOL;
} else {
    echo '$aはSomeClassのインスタンスではありません', PHP_EOL;

}