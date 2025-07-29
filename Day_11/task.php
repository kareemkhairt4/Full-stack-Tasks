<?php
class book {
    public $title;
    public function Print() {
        echo " the title is : $this->title";
    }

}

$book1 = new book();
$book1->title = "DANGER";
$book1->Print();