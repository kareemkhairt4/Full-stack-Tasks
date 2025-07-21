<?php
$msg = "";
$back_link = '<a href="Task7-1(table_images).php" class="btn btn-primary mt-3">Back to images table</a>';

if (isset($_GET['delete'])) {
    $target = $_GET['delete'];

    if (file_exists($target)) {
        unlink($target);
        $msg = "Delete The Image in Path: $target";
        $class = "success";
    } else {
        $msg = "File not found may be denied already: $target";
        $class = "warning";
    }
} else {
    $msg = "please send file name in url";
    $class = "danger";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
    <div class="container d-flex justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="alert alert-<?= $class ?> text-center">
                <?= $msg ?><br><?= $back_link ?>
            </div>
        </div>
    </div>
</body>
</html>
