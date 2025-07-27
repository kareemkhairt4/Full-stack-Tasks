<?php
$Const_URL = "/Day_10/projectt";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$conn = mysqli_connect("localhost", "root", "", "training_system");
$Role = $_SESSION["role"] ?? '';
$Name = $_SESSION["name"] ?? '';
?>
<!DOCTYPE html>
<html>

<head>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="d-flex">
                <?php if ($Role): ?>
                    <a class="navbar-brand ms-auto" href="<?= $Const_URL ?>/Front_page.php">Welcome <?= $Name ?>
                        (<?= $Role ?>)</a>

                </div>
                <div>
                    <a class="btn btn-outline-light me-2" href="<?= $Const_URL ?>/Students/students.php">Students</a>
                    <a class="btn btn-outline-light me-2" href="<?= $Const_URL ?>/Courses/courses.php">Courses</a>
                    <a class="btn btn-outline-light me-2" href="<?= $Const_URL ?>/Enrollments/enrollments.php">Enrollments</a>
                <?php endif; ?>
                <a class="btn btn-danger ms-2" href="<?= $Const_URL ?>/login.php">Logout</a>
            </div>
        </div>
    </nav>
</body>

</html>