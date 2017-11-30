<?php

class OverLoad
{
    private $values = array();

    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo "get:$name", PHP_EOL;
        if (!isset($this->values[$name])) {
            throw new OutOfBoundsException($name . "not found");
        }

        return $this->values[$name];
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo "set: $name setted to $value", PHP_EOL;
        $this->values[$name] = $value;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo "isset: $name", PHP_EOL;
        return isset($this->values[$name]);
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        echo "unset: $name", PHP_EOL;
        unset($this->values[$name]);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "call: $name", PHP_EOL;

        $method_name = '_' . $name;
        if (is_callable(array($this . $method_name))) {
            throw new BadMethodCallException($name . "method not found");
        }

        return call_user_func_array(array($this, $method_name), $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        echo "callStatic: $name", PHP_EOL;

        $method_name = '_' . $name;
        if (is_callable(array('self' . $method_name))) {
            throw new BadMethodCallException($name . "method not found");
        }

        return call_user_func_array(array('self', $method_name), $arguments);
    }

    private function _bar($value)
    {
        echo "bar called with arg '$value'", PHP_EOL;
    }

    private static function _staticBar($value)
    {
        echo "staticBar called with arg '$value'", PHP_EOL;
    }
}

$hoge = new OverLoad();
//set
$hoge->foo = 10;
//get
var_dump($hoge->foo);
//isset
var_dump(isset($hoge->foo));
//empty
var_dump(empty($hoge->foo));
//unset
unset($hoge->foo);
var_dump(isset($hoge->foo));
//bar
$hoge->_bar('baz');
OverLoad::_staticBar('baz');