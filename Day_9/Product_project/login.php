<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "test123");

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$check = 0;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($conn, $selected);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["email"] = $email;
            $check = 1;
        } else {
            $error = "Wrong password";
        }
    } else {
        $error = "Email not found";
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
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-6 p-4 mt-5 shadow bg-dark rounded-4">

                <?php if ($check == 1): ?>
                    <div class="alert alert-success" role="alert">
                        WELCOME, Admin.
                    </div>
                    <div class="gap-3 d-flex justify-content-center text-center">
                        <a href="product.php?email=<?php echo $email ?>" class="btn btn-primary">Products</a>
                        <a href="sinup.php" class="btn btn-secondary">Create Account</a>
                        <a href="login.php" class="btn btn-danger">Logout</a>
                    </div>

                <?php else: ?>
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <form class="m-4" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-white">Email address</label>
                            <input type="email" name="email" class="form-control" required >
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>
</html>
