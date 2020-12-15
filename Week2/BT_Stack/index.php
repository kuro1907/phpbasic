<?php
class Stack
{
    public $limit;
    public $stack = [];

    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    public function push($data)
    {
        if ($this->isFull()) {
            throw new Exception("Stack is Full, can't push data");
        } else {
            array_unshift($this->stack, $data);
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is Empty, can't delete data");
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is Empty, can't show data");
        } else {
            return current($this->stack);
        }
    }

    public function isEmpty()
    {
        if (count($this->stack) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isFull()
    {
        if (count($this->stack) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}
