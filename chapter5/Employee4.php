<?php

class Employee4
{
    const PARTTIME = 1;
    const REGULAR = 2;
    const CONTRACT = 3;

    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}

$hoge = new Employee4('山田', Employee4::PARTTIME);
var_dump($hoge);