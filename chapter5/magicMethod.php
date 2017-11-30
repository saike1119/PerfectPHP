<?php

class magicMethod{
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'このクラスの名前は'.__CLASS__.'です';
    }
}

$hoge = new magicMethod();
echo $hoge;
var_dump($hoge);