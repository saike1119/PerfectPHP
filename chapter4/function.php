<?php
function hello($name, $greeting = 'Hello!')
{
    echo $greeting, $name, PHP_EOL;
}

hello('bob', 'God Morning!');
hello('tom');