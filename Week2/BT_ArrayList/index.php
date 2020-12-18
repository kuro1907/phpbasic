<?php
class MyList
{
    public $size;
    public $elements = [];

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function insert($index, $obj)
    {
        echo __METHOD__;
    }

    public function add($obj)
    {
        echo __METHOD__;
    }

    public function remove($index)
    {
        echo __METHOD__;
    }

    public function get($index)
    {
        echo __METHOD__;
    }

    public function clear()
    {
        echo __METHOD__;
    }

    public function addAll($arr)
    {
        echo __METHOD__;
    }

    public function indexOf($obj)
    {
        echo __METHOD__;
    }

    public function isEmpty()
    {
        echo __METHOD__;
    }

    public function sort()
    {
        echo __METHOD__;
    }

    public function reset()
    {
        echo __METHOD__;
    }

    public function size()
    {
        echo __METHOD__;
    }
}

$objs = new MyList(4);
$objs->indexOf(4);
