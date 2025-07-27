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
        <h2 class="mb-4">Courses List (BY Session)</h2>
        
            <form action="add_course.php" method="post">
                <button type="submit" class="btn btn-primary mb-3">Add Course</button>
            </form>
        
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Hours</th>
                    <th>Price</th>
                    <?php if ($Role == "admin") { ?>
                        <th>Actions</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM courses";
                $result = mysqli_query($connective, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . ($row['title']) . '</td>';
                    echo '<td>' . ($row['description']) . '</td>';
                    echo '<td>' . ($row['hours']) . '</td>';
                    echo '<td>' . ($row['price']) . '</td>';
                    if ($Role == "admin") {
                        echo "<td> <a href='delete_course.php?id={$row['id']}' class='btn btn-warning btn-sm' > Delete </a> 
                    <a href='edit_course.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a></td>";
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <h3 class="mt-5 mb-4">Courses List (BY REST API)</h3>
        <div class="row">
            <?php
            $jsonData = file_get_contents("http://localhost/Day_10/projectt/Courses/get_course.php");
            $courses = json_decode($jsonData, true);

            if (is_array($courses)) {
                foreach ($courses as $row) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card shadow">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . ($row['title']) . '</h5>';
                    echo '<p class="card-text">Description: ' . ($row['description']) . '</p>';
                    echo '<p class="card-text">Hours: ' . ($row['hours']) . '</p>';
                    echo '<p class="card-text">Price: ' . ($row['price']) . '</p>';
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