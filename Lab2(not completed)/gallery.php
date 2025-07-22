<?php
include("Navbar.php");
$folder = "uploaddd/" . date("Y-m-d") . "/";
$images = glob($folder . "*.{jpg,png,jpeg}", GLOB_BRACE);

if (isset($_GET['delete'])) {
    $target = $_GET['delete'];

    if (file_exists($target)) {
        unlink($target);
        $msg = "Delete The Image in Path: $target";
        $class = "success";
    }

    header("Location: " . $_SERVER['PHP_SELF']);

    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark text-dark p-4">
    <div class="container">
        <h4 class="mt-5">Gallery</h4>

        <table class="table table-bordered text-dark table-striped">
            <thead>
                <tr>
                    <th>image</th>
                    <th>Name</th>

                    <th>Type</th>
                    <th>Size</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody class="">
                <?php if (!empty($images)): ?>
                    <?php foreach ($images as $i => $img): ?>
                        <tr>
                            <td><img src="<?= $img ?>" alt="Image" style="width: 50px; height: auto;"></td>
                            <td><?= basename($img) ?></td>
                            <td><?= pathinfo($img, PATHINFO_EXTENSION) ?></td>
                            <td><?= filesize($img) ?> bytes</td>
                            <td>
                                <a href="?delete=<?= urlencode($img) ?>" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No images found</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
        <div>
            <a href="Upload.php">Back to Upload</a>
            <span>|</span>
            <a href="login.php">Logout</a>
            
        </div>
    </div>
</body>

</html>