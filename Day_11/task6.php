<?php
abstract class Employee {
   
    abstract function culateSalary();

}
class HourlyEmployee extends Employee {
private $num_of_hours;
private $value_of_hour;

public function __construct($num_of_hours, $value_of_hour)
    {
       $this->num_of_hours = $num_of_hours;
       $this->value_of_hour = $value_of_hour;
    }

public function culateSalary() {
   $salary = $this->num_of_hours * $this->value_of_hour ;
   echo "The Salary is : $salary EGY" ;
}
}
$neww = new HourlyEmployee(50,300);
$neww ->culateSalary();
