<?php
include("../db1.php");

session_start();

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
        <h2>Student List</h2>
        <form action="add_student.php" method="post">
           <?php if ($Role == "admin") { ?>
            <button type="submit" class="btn btn-primary mb-3" >Add Student</button>
              <?php } ?>
        </form>

        <table class="table table-striped"> 
            <thead class="table-dark">
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                   <?php   if ($Role == "admin") {
                    echo"<th>Actions</th>";
                   }?>
                     
                </tr>
            </thead>
            </tbody>
                <?php
                $query = "SELECT * FROM students";
                $result = mysqli_query($connective, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";

                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['data_of_birth'] . "</td>";
                   if ($Role == "admin") { echo "<td> <a href='delete_student.php?id={$row['id']}' class='btn btn-warning btn-sm' > Delete </a> 
                    <a href='edit_student.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a></td>"; }
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>