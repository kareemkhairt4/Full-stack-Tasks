<?php
include("Navbar.php");

$alert = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folder = 'uploaddd/' . date('Y-m-d') . '/';

    if (!file_exists($folder))
        mkdir($folder, 0777, true);

    $fileName = basename($_FILES['image']['name']);
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $new_name = uniqid('img_', true) . '.' . $ext;
    $target = $folder . time() . "_" . $new_name;

    $allowed = ['image/jpeg', 'image/png', 'image/jpg'];

    if (in_array($_FILES['image']['type'], $allowed)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);

        $alert = '
            <div class="alert alert-success mt-3" role="alert">
                Image Uploaded  </div>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">


        <div class="row mt-5 ">
            <div class="col-md-8">
                <h2 class="">Upload Image</h2>

                <?php if ($alert): ?>
                    <div class="row justify-content-center">
                        <div class=""><?= $alert ?></div>
                    </div>
                <?php endif; ?>

                <form method="post" enctype="multipart/form-data" action="Image_log_table.php">
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <input class="form-control" type="file" id="formFile" name="image" required>
                        </div>

                        <div class="col-md-5 mb-3">
                            
                                <select class="form-select" name="selecttt" required>
                                    <option selected disabled>Choose File</option>
                                    <option value="1">Avatar</option>
                                    <option value="2">Product</option>
                                </select>
                            </form>
                        </div>

                        <div class="col-md-2 mb-3">
                            <button type="submit" class="btn btn-primary w-100 bg-success">Submit</button>
                        </div>

                        <div class=" ">
                            <a href="gallery.php">View Gallery </a>
                            <span>|</span>
                            <a href="login.php"> Logout</a>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>