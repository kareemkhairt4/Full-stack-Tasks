<?php
include("../db1.php");
$id=$_GET['id'];
$query = "DELETE FROM enrollments WHERE id='$id'";
$result = mysqli_query($connective,$query);
header("Location: enrollments.php");
?>

