<?php

namespace Models;

class  Employee
{
    private $firstname;
    private $name;
    private $date;
    private $address;
    private $role;

    public function __construct($firstname, $name, $date, $address, $role)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->date = $date;
        $this->address = $address;
        $this->role = $role;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }
}
