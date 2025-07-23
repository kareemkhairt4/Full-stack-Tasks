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
        <h2>Courses List</h2>
        <form action="add_course.php" method="post">
            <button type="submit" class="btn btn-primary mb-3" >Add Course</button>
        </form>

        <table class="table table-striped"> 
            <thead class="table-dark">
                <tr>

                    <th>Title</th>
                    <th>Description</th>
                    <th>Hours</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM courses";
                $result = mysqli_query($connective, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";

                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['hours'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td> <a href='delete_course.php?id={$row['id']}' class='btn btn-warning btn-sm' > Delete </a> 
                    <a href='edit_course.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a></td>";
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>