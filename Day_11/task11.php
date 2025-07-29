<?php
class Student {
    public $name;
    public $email;
    public $age;
    private $isActive = false;

    public function __construct($name, $email,$age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function activate() {
        $this->isActive = true;
    }

    public function getStatus() {
        return $this->isActive ? "Active" : "Inactive";
    }

    public function toArray() {
        return [
            "name" => $this->name ,
            "email" => $this->email ,
            "age"=> $this->age ,
            "status" => $this->getStatus()
        ];
    }
}
