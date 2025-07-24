<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "test123");

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format."; // علشان اتاكد ان اللي داخل علي شكل ايميل 
    }

    if (empty($errors)) {
        $query = "SELECT password FROM admin WHERE email = '$email'";
        $check = mysqli_query($conn,$query );
        $num_of_rows = mysqli_num_rows($check);

        if ($num_of_rows > 0) {
            $errors[] = "Email already registered.";
        }
         else {
             
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($conn, "INSERT INTO admin (email, password) VALUES ('$email', '$hashed_pass')");
            header("Location: login.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="p-4 bg-dark">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 bg-secondary p-4 rounded-4">
                <h4 class="text-white text-center mb-3">Signup</h4>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label text-white">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Signup</button>
                    </div>
                </form>

                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            <?php foreach ($errors as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>
