<?php
class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        return $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        return $this->y = $y;
    }

    public function getXY()
    {
        return $this->x;
        return $this->y;
    }

    public function setXY($x, $y)
    {
        return $this->x = $x;
        return $this->y = $y;
    }

    public function __toString()
    {
        $str = $this->x . "," . $this->y;
        return $str;
    }
}

class MovePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return $this->xSpeed;
        return $this->ySpeed;
    }

    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . ")" . ",speed = (" . $this->xSpeed . "," . $this->ySpeed . ")";
    }

    public function move()
    {
        return $this->x += $this->xSpeed;
        return $this->y += $this->ySpeed;
    }
}
