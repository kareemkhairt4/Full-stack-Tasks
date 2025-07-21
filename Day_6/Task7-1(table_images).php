<?php
$folder = "uploaddd/" . date("Y-m-d") . "/";
$images = glob($folder . "*.{jpg,png,jpeg}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
    <div class="container">
        <h4 class="text-center mb-4">Images Table</h4>

        <table class="table table-dark table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>image path</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($images)): ?>
                    <?php foreach ($images as $i => $img): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $img ?></td>
                            <td>
                                <a href="Task7-2(Details_of_delete).php?delete=<?= urlencode($img) ?>" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr><td colspan="3">No images found</td></tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>
</html>
