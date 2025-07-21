<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
    $action = $_GET['action'] ?? '';

    if (!empty($name) && !empty($email)) {
        $_SESSION["users"][] = ['name' => $name, 'email' => $email];
    }

    if ($action === "remove_last") {
        if (!empty($_SESSION["users"])) {
            array_pop($_SESSION["users"]);
        }
    }

    if ($action === "clear_session") {
        session_unset();
        session_destroy();
      
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
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 p-4 shadow bg-dark rounded-4">
                
                <form method="get">
                    <div class="mb-3">
                        <label class="form-label text-white">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Email address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="save_user">Submit</button>
                    </div>
                </form>

                <div class="col-12 mt-3 d-flex gap-2">
                    <a href="Task3.php?action=clear_session" class="btn btn-danger w-50">Clear Session</a>
                    <a href="Task3.php?action=remove_last" class="btn btn-warning w-50">Remove Last</a>
                </div>

                <table class="table table-bordered mt-5 bg-light">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php if (!empty($_SESSION["users"])): ?>
                            <?php foreach ($_SESSION["users"] as $user): ?>
                                 <?php if (is_array($user) && isset($user['name'], $user['email'])): ?> كان
                                <tr>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                </tr>
                                 <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                          <tr><td colspan="2" class="text-center">No Users</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>

