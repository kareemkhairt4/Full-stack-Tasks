<?php
$connective = mysqli_connect("localhost","root","","training_system");
if (!$connective) {
    die("Connection failed: " . mysqli_connect_error());
}