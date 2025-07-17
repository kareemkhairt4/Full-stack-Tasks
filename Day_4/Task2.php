<?php
$info = [
    'Name' => "Kareem MOhamed",
    "Job Title" => "Cyber Security",
    "Department" => "Network Security",
    "Salary" => "12,000 EGP"
];

?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>



<body class=" p-5 bg-secondary ">
    <div class="container mt-4">
        <div class="row p-3 ">
            <ul class="list-group">
                <?php foreach ($info as $key => $value): ?>
                    <li class="list-group-item pb-1">
                        <p><strong><?= $key . " : " ?></strong><?= $value ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>