<?php
include("../db1.php");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-white">
    <?php include("../NAVBar.php"); ?>
    <div class="container mt-5">
        <h2>Enrollments List</h2>
        <form action="add_enrollments.php" method="post">
            <button type="submit" class="btn btn-primary mb-3">Add Enrollment</button>
        </form>

        <table class="table table-striped"> 
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Grade</th>
                    <th>Date</th>
                    <th>Actions</th>
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
                    echo "<tr>";
                    echo "<td>" . $row['student'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td>" . $row['grade'] . "</td>";
                    echo "<td>" . $row['enrollmentt'] . "</td>";
                    echo "<td>
                            <a href='delete_enrollments.php?id={$row['id']}' class='btn btn-warning btn-sm'>Delete</a>
                            <a href='edit_enrollments.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a>
                          </td>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
