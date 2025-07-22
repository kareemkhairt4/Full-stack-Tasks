<?php
include("Navbar.php");
$folder = "uploaddd/" . date("Y-m-d") . "/";
$images = glob($folder . "*.{jpg,png,jpeg}", GLOB_BRACE);

if (isset($_post["selecgttt"]))
    {
        $target = $_post["selecgttt"];
        
       
    }

    header("Location: " . $_SERVER['PHP_SELF']);

    exit();

?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark text-dark p-4">
    <div class="container">
        <h4 class="mt-5">Upload log</h4>

        <table class="table table-bordered text-dark table-striped">
            <thead class="bg-white">
                <tr>
                    <th>Data</th>
                    <th>User</th>

                    <th>Type</th>
                    <th>Path</th>
                    <th>MIMe</th>
                </tr>
            </thead>
            <tbody class="">
                <?php if (!empty($images)): ?>
                    <?php foreach ($images as $i => $img): ?>
                       <?php  $ext = pathinfo($fileName, PATHINFO_EXTENSION);?>
                        <tr>
                            <td><?= date() ?></td>
                            <td><?= $name ?></td>
                            <td><?= ?></td>
                            <td><?=  $img </td>
                            <td>
                                <?="image/" . pathinfo($fileName, PATHINFO_EXTENSION) .""?>
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