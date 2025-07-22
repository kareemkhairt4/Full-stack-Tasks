<?php
session_start();
$name =isset($_SESSION['name'])  ? $_SESSION['name'] :'';
$password = isset($_SESSION['password']) ? $_SESSION['password'] :'';

?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Navbar.php">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Upload.php">Upload Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Image Log Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" aria-disabled="true">Login Log Table</a>
                    </li>
                </ul>
               
            </div>

             <h6  class=" navbar-text text-white me-2 "> Welcome kareemkhairy  |</h6>
             <a  class="btn btn-outline-light border-white" href="#">Logout</a>
                
        </div>
    </nav>

</body>

</html>