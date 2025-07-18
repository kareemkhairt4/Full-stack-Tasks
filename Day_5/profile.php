<?php
$fullname = $_POST['fullname'] ?? null;
$email    = $_POST['email'] ?? null;
$age      = $_POST['age'] ?? null;
$city     = $_POST['city'] ?? null;
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class=" p-4 bg-info">
    <div class="container ">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-4 p-4 bg-white rounded-4 shadow">
                <div class="card p-4">
                    <h4 class="text-center mb-3">User Profile</h4>

                    <?php if ($fullname ): ?>
                        <div class="alert alert-success text-center py-2">
                            Welcome, <strong><?= $fullname ?></strong>
                        </div>

                        <h5>User Information</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Full Name:</strong>
                                <?= $fullname ?></li>
                            <li class="list-group-item"><strong>Email:</strong>
                                <?= $email ?></li>
                            <li class="list-group-item"><strong>Age:</strong>
                                <?= $age   ?></li>
                            <li class="list-group-item"><strong>City:</strong>
                                <?= $city  ?></li>
                        </ul>

                        <div class="text-center mt-3">
                            <a href="Task3.php" class="btn btn-primary">Back to Form</a>
                        </div>

                    <?php else: ?>
                        <div class="alert alert-warning">No Completed Data</div>

                        <div class="text-center"> <a href="Task3.php" class="btn btn-primary">Go
                                back</a></div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

</body>

</html>