<?php
include("../db1.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style>
        .card {
            margin: 10px;
        }
    </style>
</head>

<body class="bg-white">
    <?php include("../NAVBar.php"); ?>
    <div class="container mt-4">
        <h2 class="mb-4">Enrollments List (BY Session)</h2>
       
             <form action="add_enrollments.php" method="post">
            <button type="submit" class="btn btn-primary mb-3">Add Enrollment</button>
            </form>
       
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Grade</th>
                    <th>Date</th>
                    <?php if ($Role == "admin") { ?>
                        <th>Actions</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT enrollments.id, students.name AS student, courses.title AS course,
                             enrollments.grade, enrollments.enrollment_date AS enrollmentt
                      FROM enrollments 
                      JOIN students ON enrollments.student_id = students.id 
                      JOIN courses ON enrollments.course_id = courses.id";
                $result = mysqli_query($connective, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . ($row['student']) . '</td>';
                    echo '<td>' . ($row['course']) . '</td>';
                    echo '<td>' . ($row['grade']) . '</td>';
                    echo '<td>' . ($row['enrollmentt']) . '</td>';
                    if ($Role == "admin") {
                        echo "<td> <a href='delete_enrollments.php?id={$row['id']}' class='btn btn-warning btn-sm'>Delete</a>
                            <a href='edit_enrollments.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a></td>";
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <h3 class="mt-5 mb-4">Enrollments List (BY REST API)</h3>
        <div class="row">
            <?php
            $jsonData = file_get_contents("http://localhost/Day_10/projectt/enrollments/get_enrollments.php");
            $enrollments = json_decode($jsonData, true);

            if (is_array($enrollments)) {
                foreach ($enrollments as $row) {
                    echo '<div class="col-md-6">';
                    echo '<div class="card shadow">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">Student: <strong>' . htmlspecialchars($row['student'] ?? '') . '</strong> enrolled in course <strong>' . htmlspecialchars($row['course'] ?? '') . '</strong></p>';
                    echo '<p class="card-text">Grade: ' . htmlspecialchars($row['grade'] ?? '') . '</p>';
                    echo '<p class="card-text">Date: ' . htmlspecialchars($row['enrollmentt'] ?? '') . '</p>';
                    echo '</div></div></div>';
                }
            } else {
                echo "<p class='text-danger'> Failed to load data from API</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>