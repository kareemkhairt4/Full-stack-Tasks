<?php
$Const_URL = "/Day_9/projectt";
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$conn = mysqli_connect("localhost", "root", "", "training_system");
$Role = $_SESSION["role"] ;
$Name = $_SESSION["name"] ;


?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            
             <?php if(isset( $_SESSION["role"])) { ?>
            <a class="navbar-brand" href="<?=$Const_URL?>/login.php"><?php echo "Welcome $Name ($Role)";?></a>              
            <?php } ?>
        </div>
             </div class="me-5">

        <a class="btn me-2" href="<?= $Const_URL?>/Students/students.php">Students</a>
        <a class="nav-link text-white me-4" href="<?= $Const_URL?>/courses/courses.php">Courses</a>
        <a class="nav-link text-white me-4" href="<?=$Const_URL?>/enrollments/enrollments.php">Enrollments</a>
        <a class="btn btn-outline-light me-5" href="<?=$Const_URL?>/login.php">Logout</a> 

        </div>
    </nav>

</body>

</html>