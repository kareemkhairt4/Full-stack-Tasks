<?php
session_start();
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";
$password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
$MY_NAME = $_POST["name"] ?? "";
$MY_EMAIL = $_POST["email"] ?? "";
$check = 0;
$name1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["images"])) {
    $name1 = $_FILES["images"]["name"];
    $temp1 = $_FILES["images"]["tmp_name"];

    $ext1 = pathinfo($name1, PATHINFO_EXTENSION);
    $type = explode("/", $_FILES["images"]["type"])[0];
    $allowed = ["png", "jpg", "jpeg"];

    if (in_array($ext1, $allowed) && $type == "image") {
        move_uploaded_file($temp1, "uploads/$name1");
        $check = 1;
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["pass"];
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
        <div class="row mt-3 justify-content-center">
            <div class="col-md-3 p-4 rounded-4 bg-dark">
                <?php if ($check == 1): ?>
                    <div class="card mb-4">
                        <img src="uploads/<?php echo $name1; ?>" class="img-thumbnail card-img-top mt-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $MY_NAME ?></h5>
                            <p class="card-text"><?php echo $MY_EMAIL ?></p>
                            <a href="Lab1-2(products).php" class="btn btn-primary">Go to Products</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 p-4 rounded-4 bg-dark text-white">
                <form class="m-4" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 mb-4">
                        <?php if ($check == 1): ?>
                            <div class="alert alert-success text-center" role="alert">
                                ✅ Account created successfully!
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input class="form-control" type="file" name="images" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>