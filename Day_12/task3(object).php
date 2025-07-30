<?php

$conn = mysqli_connect("localhost", "root", "", "training_system");

$email = "kareem@gamil.com";
$sql = "SELECT * FROM students WHERE email= ?";
$result = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($result, "s", $email);
mysqli_stmt_execute($result);
$result = mysqli_stmt_get_result($result);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"];
}
