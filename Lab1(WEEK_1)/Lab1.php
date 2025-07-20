<?php
session_start();
$email = isset($_GET['email']) ? $_GET['email'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

$admins = [
    ['email' => "admin@example.com", 'password' => "123456"],
    ['email' => "test@example.com", 'password' => "test123"]
];

$check = 0;

foreach ($admins as $key => $value) {
    if ($email === $value['email'] && $password === $value['password']) {
        $check = 1;
        break;
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
            <div class="col-md-6 p-4 mt-5 ml-4 shadow bg-dark rounded-4">

                <?php if ($check == 1): ?>
                    <div class="alert alert-success" role="alert">
                        WELCOME, Admin (Admin).
                    </div>

                    <div class="gap-3 ml-4 d-flex justify-content-center text-center">
                        <a href="Lab1.php" class="btn btn-primary col-md-4">Logout</a>
                        <a href="Lab1-2(products).php" class="btn btn-primary col-md-3">Products</a>
                        <a href="signup.php" class="btn btn-primary col-md-4">Create Account</a>
                    </div>

                <?php elseif (!empty($email) || !empty($password)): ?>

                    <form class="m-4" method="get">
                        <div class="alert alert-danger ">
                            ⚠ Wrong Email or Pass
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                        <h6 class="text-center text-secondary mt-3">admin@example.com / 123456</h6>
                        <h6 class="text-center text-secondary">test@example.com / test123</h6>
                    </form>

                <?php else: ?>
                    <form class="m-4" method="get">
                        <div class="mb-3">
                            <label class="form-label text-white">Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                        <h6 class="text-center text-secondary mt-3">admin@example.com / 123456</h6>
                        <h6 class="text-center text-secondary">test@example.com / test123</h6>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>