<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["images"])) {

    $allowed = ["png", "jpg"];
    $maxSize = 3 * 1024 * 1024;
    $files = $_FILES["images"];

    $count = count($files["name"]);
    $errors = [];
    $uploaded = [];

    for ($i = 0; $i < $count; $i++) {
        $name = $files["name"][$i];
        $tmp = $files["tmp_name"][$i];
        $size = $files["size"][$i];
        $type = explode("/", $files["type"][$i])[0];
       $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));


        /* if (!in_array($ext, $allowed))
         {
             $errors[] = "امتداد الصورة '$name' غير مسموح";
         } elseif ($size > $maxSize) {
             $errors[] = "الصورة '$name' حجمها أكبر من 3 ميجا";
         } elseif ($type != "image") {
             $errors[] = "الملف '$name' مش صورة";
         } else {
             $uploaded[] = ["name" => $name, "tmp" => $tmp];
         }*/

        if (!in_array($ext, $allowed)):
            $errors[] =" الصوره $i <br>" ."امتداد الصورة ( $name )  غير مسموح";

            if ($size > $maxSize):
                $errors[] =" الصوره $i <br>" . "الصورة ( $name ) حجمها أكبر من 3 ميجا";
                if ($type != "image"):
                    $errors[] = " الصوره $i <br>" ." ($name ) مش صورة";
                endif;
            endif;
        else:
            $uploaded[] = ["name" => $name, "tmp" => $tmp];



        endif;


        /* if (!in_array($ext, $allowed) && ($size > $maxSize) ) 
        {
            $errors[] = " اكبر من 3 ميجا '$name'حجم الصوره <br>امتداد الصورة '$name' غير مسموح";
        }
         elseif (!in_array($ext, $allowed))
        {
            $errors[] = "امتداد الصورة '$name' غير مسموح";
        }
        elseif ($size > $maxSize)
        {
            $errors[] = "الصورة '$name' حجمها أكبر من 3 ميجا";
        } 
        elseif ($type != "image")
        {
            $errors[] = "الملف '$name' مش صورة";
        }
        else 
        {
            $uploaded[] = ["name" => $name, "tmp" => $tmp];
        }*/



    }

    if (!empty($errors))
     {
        echo "<div class='alert alert-danger'><ul class=mt-2>";
        foreach ($errors as $err) {
            echo "<li>$err</li>";
        }
        echo "</ul></div>";
    } else {
        foreach ($uploaded as $uoloadedd) {
            move_uploaded_file($uoloadedd["tmp"], "uploads/" . $uoloadedd["name"]);
            echo "<div class='alert alert-success mt-3'>تم رفع الصورة: {$uoloadedd['name']}</div>";
            echo "<img src='uploads/{$uoloadedd['name']}' class='img-thumbnail mt-3' width='200'>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="p-4 bg-success">
    <div class="container">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-4 p-4 bg-white">
                <form class="p-4" method="post" enctype="multipart/form-data">
                    <div class="mb-3 col-12">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Images</label>
                        <input class="form-control" type="file" name="images[]" multiple>
                    </div>
                    <button type="submit" class="w-100 mb-3 btn btn-primary bg-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>