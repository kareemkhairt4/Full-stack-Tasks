<?php
header("Content-Type: application/json");


include 'task11.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $student = new Student($data['name'], $data['email'] ,$data['age']);
    $student->activate();

    echo json_encode($student->toArray(), JSON_PRETTY_PRINT);
}
