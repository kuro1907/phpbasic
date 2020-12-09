<?php

namespace Services;

class EmployeeManager
{
    private $employee;

    public function __construct()
    {
        $this->employee = [];
    }

    public function add($employee)
    {
        $this->employee[] = $employee;
    }

    public function getEmployee()
    {
        return $this->employee;
    }

    public function showInfo()
    {
        echo "<pre>";
        print_r($this->employee);
    }

    public function removeEmployee($key)
    {
        $person = $this->employee[$key];
        unset($person);
        return $this->employee;
    }
}

// $obj = new EmployeeManager();
// $obj->add("Vu");
// $obj->add("Trinh");
// $obj->showInfo();
// echo "<br>";
// $obj->showEmployee("Trinh");

// //$obj->removeEmployee(1);
// $obj->showInfo();
