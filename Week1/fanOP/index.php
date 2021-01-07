<?php
class Fan
{
    private $speed  = "SLOW";
    private $on     = false;
    private $radius = 5;
    private $color  = "blue";

    public function __construct()
    {
    }

    public function __toString()
    {
        if ($this->on == true) {
            if ($this->speed != NULL) {
                echo "Speed     : " . $this->speed . "<br>";
            }
            echo "Radius    : " . $this->radius . "<br>";
            echo "Color     : " . $this->color . "<br>";
            echo "Fan is On";
            echo "<hr>";
        } else {
            if ($this->speed != NULL) {
                echo "Speed     : " . $this->speed . "<br>";
            }
            echo "Radius    : " . $this->radius . "<br>";
            echo "Color     : " . $this->color . "<br>";
            echo "Fan is Off";
            echo "<hr>";
        }
    }

    public function setSpeed($value)
    {
        $this->speed = $value;
        switch ($this->speed) {
            case 1;
                return $this->speed = "SLOW";
                break;
            case 2;
                return $this->speed = "MEDIUM";
                break;
            case 3;
                return $this->speed = "FAST";
                break;
            default:
                echo "Please set Speed 1 - 3<br>";
                $this->speed = NULL;
                break;
        }
    }

    public function getSpeed()
    {
        switch ($this->speed) {
            case 1;
                return $this->speed = "SLOW";
                break;
            case 2;
                return $this->speed = "MEDIUM";
                break;
            case 3;
                return $this->speed = "FAST";
                break;
        }
    }

    public function setMode($mode)
    {
        $this->on = $mode;
    }

    public function getMode()
    {
        return $this->on;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
};

$fan1 = new Fan();
$fan1->setSpeed(3);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setMode(true);
$fan1->__toString();

$fan2 = new Fan();
$fan2->setSpeed(2);
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setMode(false);
$fan2->__toString();
