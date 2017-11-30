<?php
function __autoload($name){
    $filename = $name.'.php';
    if(is_readable($filename)){
        require $filename;
    }
}

$hoge = new Foo();