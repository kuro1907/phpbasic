<?php
class Nodes
{
    public $value;
    public $next;
}

class Queue
{
    public $front = NULL;
    public $back = NULL;

    public function __construct()
    {
    }

    public function isEmpty()
    {
        if ($this->front == NULL) {
            return true;
        } else {
            return false;
        }
    }

    public function enqueue($value)
    {
        $this->back = new Nodes();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $this->back->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            echo 'Queue is Empty!!!';
        } else {
            $removedValue = $this->front->value;
            $this->front = $this->front->next;
            return $removedValue;
        }
    }
}

$objQueue = new Queue();
$objQueue->enqueue(1);
$objQueue->enqueue(2);
$objQueue->enqueue(3);
// $objQueue->dequeue();
// $objQueue->dequeue();
// $objQueue->enqueue(4);
// $objQueue->enqueue(5);
// $objQueue->dequeue();
// $objQueue->dequeue();
// $objQueue->dequeue();


echo "<pre>";
print_r($objQueue);
echo "</pre>";
