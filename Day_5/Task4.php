<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"]))
 {
    $name1 = $_FILES["image"]["name"];
    $temp1 = $_FILES["image"]["tmp_name"];
    //$name1 = $_FILES["file"]["name"];
//$temp2 = $_FILES["file"]["tmp_name""];
    $ext1 = (explode(".", $_FILES["image"]["name"])[count(explode('.', $name1)) - 1]);
    $type = (explode("/", $_FILES["image"]["type"])[0]);
    $allowed = ["png", "jpg"];

    if (in_array($ext1, $allowed)) {
        if ($type == "image")
            move_uploaded_file($temp1, 'uploads/' . $name1);
        else {
            echo ' <div class="alert alert-info" role="alert">
  A simple info alert—check it out! </div>';

        }
    } elseif ($_FILES["image"]["size"] < 3 * 1024 * 1024) {
        if ($type == "image")
            move_uploaded_file($temp1, uploads / $name1);
        else {
            echo ' <div class="alert alert-info" role="alert">
  A simple info alert—check it out! </div>';
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class=" p-4 bg-success">
    <div class="container ">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-4 p-4 bg-white ">
                <form class="p-4" method="post" enctype="multipart/form-data">
                    <div class="mb-3 col-12">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            required>
                        <div id="emailHelp" class="form-text"> </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            required>
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Age</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="exampleInputEmail1" class="form-label">City</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            required>
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <button type="submit" class="w-100 mb-3 btn btn-primary bg-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>