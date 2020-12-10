<?php
include_once "Models/employee.php";
include_once "Services/employee-manager.php";

use Services\EmployeeManager;
use Models\Employee;

$employeeManager = new EmployeeManager();

$employee1 = new Employee("Nguyen Nam", "Vu", "19/07/1995", "ThaiPhien", "GiamDoc");
$employee2 = new Employee("Do Thi Thao", "Trinh", "08/11/1997", "BaoVinh", "TongGiamDoc");


$employeeManager->add($employee1);
$employeeManager->add($employee2);


$employeeManager->removeEmployee(1);
$employeeManager->showInfo();
