<?php
class Element
{
    public $value; //  giá trị của phần tử
    public $next; // trỏ đến phần tử phía sau
}

class Queue extends Element
{
    public $limit;
    public $font = NULL;
    public $back = NULL;
    public $count = 0;
    public function __construct()
    {
        $this->limit;
    }
    //kiểm tra Queue rỗng hay không
    public function isEmpty()
    {
        if ($this->font == NULL) {
            return true;
        } else {
            return false;
        }
    }
    // thêm 1 phần tử vào queue
    public function enqueue($value)
    {
        $oldback = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldback->next = $this->back;
        }
        $this->count++;
    }
    // xóa 1 phần tử 
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new Exception('Queue is Empty!!!');
        } else {
            $removedValue = $this->font->value;
            $this->font = $this->font->next;
            return $removedValue;
        }
    }
    public function peek()
    {
        if ($this->isEmpty()) {
            throw new Exception('Queue is Empty!!!');
        }
        return current($this->font);
    }
    public function isFull()
    {
        if ($this->count == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}

$objQueue = new Queue();
$objQueue->enqueue(1);
$objQueue->enqueue(2);
$objQueue->enqueue(3);
$objQueue->dequeue();
$objQueue->dequeue();
$objQueue->enqueue(4);
$objQueue->enqueue(5);
$objQueue->dequeue();
$objQueue->dequeue();
$objQueue->dequeue();
