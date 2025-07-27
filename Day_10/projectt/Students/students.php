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
        <h2 class="mb-4">Students List (BY Session)</h2>
        <form action="add_student.php" method="post">
           <?php if ($Role == "admin") { ?>
            <button type="submit" class="btn btn-primary mb-3" >Add Student</button>
              <?php } ?>
        </form>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date_of_birthday</th>
                     <?php   if ($Role == "admin") {
                    echo"<th>Actions</th>";
                   }?>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM students";
                $result = mysqli_query($connective, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . ($row['name']) . '</td>';
                    echo '<td>' . ($row['email']) . '</td>';
                    echo '<td>' . ($row['phone']) . '</td>';
                    echo '<td>'. ($row['data_of_birth']) . '</td>';
                     if ($Role == "admin") { echo "<td> <a href='delete_student.php?id={$row['id']}' class='btn btn-warning btn-sm' > Delete </a> 
                    <a href='edit_student.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a></td>"; }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <h3 class="mt-5 mb-4">Students List (BY REST API)</h3>
       
        <div class="row">
            <?php
            
            $jsonData = file_get_contents("http://localhost/Day_10/projectt/Students/get_student.php");
            $students = json_decode($jsonData, true);

            if (is_array($students)) {
                foreach ($students as $row) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card shadow">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . ($row['name']) . '</h5>';
                    echo '<p class="card-text">Email: ' .($row['email']) . '</p>';
                    echo '<p class="card-text">Phone: ' .($row['phone']) . '</p>';
                    echo '<p class="card-text">Date of birthday: ' . ($row['data_of_birth']) . '</p>';
                    echo '</div></div></div>';
                }

            } else {
                echo "<p class='text-danger'>Failed to load data from API</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>