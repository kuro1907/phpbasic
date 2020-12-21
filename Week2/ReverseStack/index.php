<?php
class Stack
{
    public $stack = [];
    public $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    public function pop()
    {
        return array_shift($this->stack);
    }

    public function reverse()
    {
        $count = count($this->stack);
        for ($i = 0; $i < $count; $i++) {
            $this->stack[] = $this->pop();
        }
    }
}

$objStack = new Stack(5);
$objStack->push(1);
$objStack->push(2);
$objStack->push(3);
$objStack->push(4);
$objStack->push(5);
// $objStack->pop();
$objStack->reverse();

echo "<pre>";
print_r($objStack);
echo "</pre>";
