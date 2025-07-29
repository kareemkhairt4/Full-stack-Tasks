<?php
class Course {
    private $instructor_name;
    private $title;
    function __construct($instructor_name, $title) {
        $this->instructor_name = $instructor_name;
        $this->title = $title;
    }
    public function describ() {
        echo " The Name is : " .$this->instructor_name." , The Salary is : " . $this->title;
    }

}

$neww = new Course("ahmed" , "Maths");
$neww->describ();