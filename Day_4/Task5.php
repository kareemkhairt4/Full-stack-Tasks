<?php
$Courses = ["HTML", "CSS", "JS", "PHP"];

array_push($Courses , " MySQL");
array_unshift($Courses , " Git");
array_shift($Courses );

?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>



<body class="p-5 bg-secondary ">
    <div class="container mt-4">
        <h2 class="text-primary"> Available Courses</h2>
        <div class="row p-3 ">
            <ul class="list-group">
                <?php foreach ($Courses as $course): ?>
                    <li class="list-group-item"><?= $course ?> </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>