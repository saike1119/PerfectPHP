<?php
// nameSpace.php

namespace Project\module;

//架空の想定
require_once 'Foo/Bar/Baz.php';
require_once 'Hoge/Fuga.php';
require_once 'Module/klass/some.php';

use Foo\Bar as BBB;
use Hoge\Fuga;

class Piyo
{
}

;

$obj1 = new \Directory();

$obj2 = new BBB\Baz();

$obj3 = new Fuga();

$obj4 = new klass\some();

$obj5 = new Piyo;

some_function();

BBB\SOME_CONST;

SOME_CONST;