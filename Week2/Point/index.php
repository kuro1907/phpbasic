<?php
class Point2D
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
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $arr = [$this->x, $this->y];
        return $arr;
    }

    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . ")";
    }
}

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ()
    {
        $arr = [$this->x, $this->y, $this->z];
        return $arr;
    }

    public function setXYZ($x, $y, $z)
    {
        parent::setXY($x, $y);
        return $this->z = $z;
    }

    public function __toString()
    {
        return "(" . $this->x . "," . $this->y . "," . $this->z . ")";
    }
}
