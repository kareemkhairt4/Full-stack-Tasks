<?php
$alert = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folder = 'uploaddd/' . date('Y-m-d') . '/';
    

    if (!file_exists($folder))
        mkdir($folder, 0777, true);

    $fileName = basename($_FILES['image']['name']);
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $new_name = uniqid('img_', true) . '.' . $ext;
    $target = $folder . time() . "_" . $new_name;

    $allowed = ['image/jpeg', 'image/png' ,'image/jpg'];

    if (in_array($_FILES['image']['type'], $allowed)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);

        $alert = '
            <div class="alert alert-success mt-3" role="alert">File uploaded successfully. <br> Uploaded To: ' . ($target) . ' </div>';
    }
     else {
        $alert = '<div class="alert alert-danger mt-3" role="alert">Invalid file type. Only JPEG and PNG and JPG are allowed.</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="p-4 bg-dark">
    <div class="container">
        
       
        <?php if (($alert)): ?>
            <div class="row justify-content-center">
                <div class="col-md-6"><?= $alert ?></div>
            </div>
        <?php endif; ?>

        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-6 p-4 mt-3 shadow bg-dark rounded-4 text-white">

                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label text-white">Upload Image</label>
                        <div class="input-group mb-3">

                            <input type="file" class="form-control" name="image" required>
                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
