<?php
session_start();
$name = isset($_GET['name']) ? $_GET['name'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

$_SESSION["name"] = $name;
$_SESSION["password"] = $password;

$admins =[
    ['name' => "kareemkhairy", 'password' => "123456"]];

$check = 0;

foreach ($admins as $value) {
    if ($name == $value['name'] && $password == $value['password']) {
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
                 <?php  header("Location:dashboard.php");
                     exit(); ?>

                <?php elseif (!empty($name) || !empty($password)): ?>

                    <form class="m-4" method="get">
                        <div class="alert alert-danger ">
                            Login Failed
                        </div>

                               <h2 class="text-center text-secondary text-white mt-3">Login</h2>
                        <div class="mb-3">
                            <label class="form-label text-white">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                    </form>

                <?php else: ?>
                    <form class="m-4" method="get">
                        <h2 class="text-center text-secondary text-white mt-3">Login</h2>
                        <div class="mb-3">
                            <label class="form-label text-white">Name</label>
                            <input type="text" name="name" class="form-control" required>
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