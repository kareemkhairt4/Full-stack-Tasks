<?php
class Vehicle {
    public $model;
    public $make;
    function __construct($model, $make) {
        $this->model = $model;
        $this->model = $make;
    }
    public function info() {
        echo " The model is : ". $this->model ." The make is : " .$this->make ;
    }

}

class Car extends Vehicle {
   public $fuelType;
    function __construct($model, $make ,$fuelType)  {
        $this->model = $model;
        $this->make = $make;
        $this->fuelType = $fuelType;
    }
    public function info() {
        echo " The model is : " .$this->model." , The Make is : " . $this->make. " , The fuelType is : " . $this->fuelType;
    }

}

$ss = new Car("jkllk" , "gj" , "ghjk");
$ss->info();
?>