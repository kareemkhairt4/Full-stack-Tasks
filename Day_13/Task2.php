<?php
header("Content-Type: application/json");

$conn = mysqli_connect("localhost", "root", "", "training_system");
if (mysqli_connect_errno()) {
    echo json_encode(["status" => "error", "message" => "Connection failed: " . mysqli_connect_error()]);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $title = $data["title"] ?? '';
    $description = $data["description"] ?? '';
    $hours = $data["hours"] ?? '';
    $price = $data["price"] ?? '';

    if (!isset($title, $description, $hours, $price)) {
    echo json_encode(["status"=> "error", "message"=> "The data is wrong"]);
    exit();
}

    $sql = "INSERT INTO courses (title, description, hours, price) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssii", $title, $description, $hours, $price);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["status" => "Inserted Successfully", "message" => "DATA Inserted"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Insertion failed"]);
    }
}
?>
