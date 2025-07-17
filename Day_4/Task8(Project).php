<?php
$array = [
    ["Name" => "Ahmed", "Course" => "PHP", "Grade" => 75, "Statues" => "Passed"],
    ["Name" => "Salma", "Course" => "JS", "Grade" => 95, "Statues" => "Passed"],
    ["Name" => "Youssef", "Course" => "MySQL", "Grade" => 58, "Statues" => "Failed"],
    ["Name" => "Laila", "Course" => "HTML", "Grade" => 88, "Statues" => "Passed"]
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
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Course</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($array as $k => $value): ?>
                        <tr class="text-center <?php if ($value['Grade'] >= 60) {
                            echo "table-success";
                        } else {
                            echo "table-danger";
                        } ?>">
                            <td><?= $value['Name'] ?></td>
                            <td><?= $value['Course'] ?></td>
                            <td> <span class="badge <?php if ($value['Grade'] >= 60) {
                                echo " text-bg-success";
                            } else {
                                echo "text-bg-danger";
                            } ?> rounded"><?= $value['Grade'] . "%" ?></span>
                            </td>
                            <td><?= $value['Statues'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal<?= $k ?>">
                                    View
                                </button>
                            </td>
                        </tr>

                        <!-- Modal for this student -->
                        <div class="modal fade" id="modal<?= $k ?>" tabindex="-1" aria-labelledby="label<?= $k ?>"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="label<?= $k ?>">Student Details</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center p-2 mb-3">
                                        <div class="m-2"> <strong>Name: </strong> <?= $value['Name'] ?><br> </div>
                                        <div class="m-2"> <strong>Course: </strong> <?= $value['Course'] ?><br> </div>
                                        <div class="m-2"> <strong>Grade: </strong> <?= $value['Grade'] ?><br> </div>
                                        <div class="m-2"> <strong>Status: </strong> <?= $value['Statues'] ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>