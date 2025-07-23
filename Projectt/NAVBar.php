<?php
$Const_URL = "/projectt";
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            
            <a class="nav-link text-white" href="<?=$Const_URL?> /Front_page.php"><h4>INDEX</h4></a>
        </div>
        </div class="me-5">

        <a class="btn me-2 " href="<?= $Const_URL?>/Students/students.php">Students</a>
        <a class="nav-link text-white me-4" href="<?= $Const_URL ?>/courses/courses.php">Courses</a>
        <a class="nav-link text-white me-4" href="<?=$Const_URL?>/enrollments/enrollments.php">Enrollments</a>

        </div>
    </nav>

</body>

</html>