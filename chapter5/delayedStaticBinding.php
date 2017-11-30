<?php

class delayedStaticBinding
{
    public function helloGetway()
    {
        static::hello();
    }

    public static function hello()
    {
        echo __CLASS__, 'hello!', PHP_EOL;
    }
}

class hoge extends delayedStaticBinding
{
    public static function hello()
    {
        echo __CLASS__, 'hello!', PHP_EOL;
    }
}

$fuga = new hoge();
$fuga->helloGetway();