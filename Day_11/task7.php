<?php
abstract class shape {

    abstract function draw();
}
class Rectangle extends shape {
    public function draw() {
        echo"the word is Rectangle <br>";
    }
}
class Circle extends shape {
    public function draw() {
        echo"the word is circle <br>";
    }
}
$array = [
    new Rectangle(),
    new Circle()
] ;
foreach ($array as $value) {
    echo $value ->draw();
}
?>
