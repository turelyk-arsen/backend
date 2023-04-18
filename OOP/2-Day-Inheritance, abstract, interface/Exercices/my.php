<?php
class Employee {
    public $name;
    public $age;
    public $salary;

    public function show($variable) {
        return "$variable !!!";
    }

    public function getAge() {
        return $this->age;
    }

    public function checkAge () {
        if ($this->age > 20) 
        return "$this->age is bigger than 20";
    }
}

$newEmployee = new Employee();
$newEmployee->name = 'eric';
$newEmployee->age = '30';
$newEmployee->salary = '2000';

$newEmployee2 = new Employee();
$newEmployee2->name = 'eric';
$newEmployee2->age = '20';
$newEmployee2->salary = '2000';

echo $newEmployee->age + $newEmployee2->age;
echo $newEmployee->show('Hello');
echo $newEmployee->getAge();
echo $newEmployee->checkAge();

