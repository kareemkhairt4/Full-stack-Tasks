<?php
header("Content-Type: application/json");
$conn = mysqli_connect("localhost", "root", "", "training_system");

if (mysqli_connect_errno()) {
    echo json_encode(["error" => mysqli_connect_error()]);
    exit();
}

$courses = [];

if (isset($_GET["id"]) && $_GET["id"] != "null") {
    $id = $_GET["id"];
    $query = "SELECT * FROM courses WHERE id=$id";
} else {
    $query = "SELECT * FROM courses";
}

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $courses[] = $row;
}

echo json_encode($courses);
?>