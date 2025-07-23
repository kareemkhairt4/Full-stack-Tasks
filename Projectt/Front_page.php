<?php
include("db1.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Front Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-white">
    <?php include("NAVBar.php"); ?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center">
                <div class="card shadow">
                    <div class="card-body bg-success">
                        <h5 class="card-title">Students</h5>
                        <?php
                        $student_Count = mysqli_query($connective, "SELECT COUNT(*) AS count FROM students");
                        $studentCount = mysqli_fetch_assoc($student_Count);
                        echo " <p class='card-text'>Total Students: " . $studentCount['count'] . "</p>";
                        ?>
                        <a href="Students/students.php" class="btn btn-primary">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow">
                    <div class="card-body bg-danger">
                        <h5 class="card-title">Courses</h5>
                        <?php
                        $course_Count = mysqli_query($connective," SELECT COUNT(*) AS count FROM courses");
                        $courseCount = mysqli_fetch_assoc($course_Count);
                        echo " <p class='card-text'>Total Courses: " . $courseCount['count'] . "</p>";
                        ?>
                        <a href="Courses/courses.php" class="btn btn-secondary">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow">
                    <div class="card-body bg-primary">
                        <h5 class="card-title">Enrollments</h5>
                        <?php
                        $enrollments_Count = mysqli_query($connective," SELECT COUNT(*) AS count FROM enrollments");
                        $enrollmentsCounts = mysqli_fetch_assoc($enrollments_Count);
                        echo "<p class='card-text'>Total Enrollments: " . $enrollmentsCounts['count'] . "</p>";
                        ?>
                        <a href="Enrollments/enrollments.php" class="btn btn-success">View Enrollments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>