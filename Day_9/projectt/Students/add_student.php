<?php
include("../db1.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    $data_of_birth = $_POST["data_of_birth"] ?? "";

    if ($name && $email && $phone && $data_of_birth) {
        $query = "INSERT INTO students (name, email, phone, data_of_birth)
                  VALUES ('$name', '$email', '$phone', '$data_of_birth')";
        mysqli_query($connective, $query);
        header("Location: students.php?status=success");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-info">
    <?php include("../NAVBar.php"); ?>
    <div class="container mt-5">
        <h2>Add Student</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="data_of_birth" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>
</body>
</html>
