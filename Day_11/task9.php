<?php
    abstract class Animal
    {
        protected $name;
        abstract function makesound();
    }
    class Dog extends Animal
    {
        function __construct($name)
        {
            $this->name = $name;
        }
        public function makesound()
        {
            echo $this->name;
        }

    }

    $neww = new Dog("WOFF");
    $neww->makesound();