<?php
class Employee {
    public $name= "Kareem <br>";
    protected $salary = "2000<br>";
    private $pouns = "40";
    public function Print() {
        echo " The Name is : " .$this->name." The Salary is : " . $this->salary ." The Pouns is : " . $this->pouns;
    }

}

$employee1 = new Employee;

$employee1->Print();