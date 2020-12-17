<?php
class Dancer
{
    public $name;
    public $gender;
    public $males = [];
    public $females = [];
    public $queue = [];

    public function __construct()
    {
    }

    public function enqueue($name, $gender)
    {
        $this->name     = $name;
        $this->gender   = $gender;
        if ($gender == "male") {
            $this->males[]   = $this->name;
        } else if ($gender == "female") {
            $this->females[] = $this->name;
        }
    }

    public function matchCouple()
    {
        $count = count($this->males);
        for ($i = 0; $i < $count; $i++) {
            if (!isset($this->females[$i])) {
                echo "<br>Cặp thứ " . ($i + 1) . " là : Không thể kết cặp vì thiếu người";
            } else {
                echo "<br>Cặp thứ " . ($i + 1) . " là : " . $this->males[$i] . " và " . $this->females[$i];
            }
        }
    }
}
$person = new Dancer();
$person->enqueue("vu", "male");
$person->enqueue("ychi", "male");
$person->enqueue("cuong", "male");
$person->enqueue("tam", "male");
$person->enqueue("trinh", "female");
$person->enqueue("tu", "female");
$person->enqueue("ly", "female");
$person->enqueue("tuyet", "female");
$person->enqueue("linh", "female");
$person->enqueue("tra", "female");
$person->matchCouple();

echo "<pre>";
print_r($person);
