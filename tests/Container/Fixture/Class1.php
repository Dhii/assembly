<?php

namespace Assembly\Test\Container\Fixture;

class Class1
{
    public $setterParam1;
    public $setterParam2;
    public $constructorParam1;
    public $constructorParam2;

    public $publicField;

    public function __construct($param1, $param2)
    {
        $this->constructorParam1 = $param1;
        $this->constructorParam2 = $param2;
    }

    public function setSomething($param1, $param2)
    {
        $this->setterParam1 = $param1;
        $this->setterParam2 = $param2;
    }
}
