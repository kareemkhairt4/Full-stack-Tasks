<?php
$errors = [];
$uploaded = [];
$product_name = '';
$description = '';

session_start();
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : "guest";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["images"])) {

    $allowed = ["png", "jpg"];
    $maxSize = 3 * 1024 * 1024;
    $files = $_FILES["images"];

    $count = count($files["name"]);
    $product_name = htmlspecialchars($_POST['product_name'] ?? '');
    $description = htmlspecialchars($_POST['description'] ?? '');

    for ($i = 0; $i < $count; $i++) {
        $name = basename($files["name"][$i]);
        $tmp = $files["tmp_name"][$i];
        $size = $files["size"][$i];
        $type = explode("/", $files["type"][$i])[0];
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $order = $i + 1; // علشان بس في العرض يكون الرقم صحيح يعني اول واحده تكون الصوره 1 مش الصوره 0

        if (!in_array($ext, $allowed)) {
            $errors[] = "الصوره $order <br> امتداد الصورة ( $name ) غير مسموح";
        }
        if ($size > $maxSize) {
            $errors[] = "الصوره $order <br> الصورة ( $name ) حجمها أكبر من 3 ميجا";
        }
        if ($type != "image") {
            $errors[] = "الصوره $order <br> ($name ) مش صورة";
        }
        if (empty($errors)) {
            $uploaded[] = ["name" => $name, "tmp" => $tmp];
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script>
        email = sessionStorage.getItem("email");
    </script>
</head>

<body class="p-4 bg-dark">
    <div class="container">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-6 p-4 bg-dark rounded-4">
                <form method="post" enctype="multipart/form-data">
                    <div class="col-md-12 d-flex justify-content-center ">
                        <div class="col-md-6 me-2 ">
                            <label class="form-label text-white">Product Name</label>
                            <input type="text" class="form-control " name="product_name" required
                                value="<?php echo $product_name; ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white">Description</label>
                            <input type="text" class="form-control " name="description" required
                                value="<?php echo $description; ?>">
                        </div>
                    </div>
                    <div class="mb-3 mt-3 col-md-12">
                        <label class="form-label text-white">Product Images</label>
                        <input class="form-control" type="file" name="images[]" multiple required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="box col-6 text-center w-50 mb-3 btn btn-primary ">Add
                            Product</button>
                    </div>
                </form>
                <?php if (!empty($errors)): ?>
                    <div class='alert alert-danger mt-2'>
                        <ul>
                            <?php foreach ($errors as $err): ?>
                                <li><?php echo $err; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <hr class="mt-5 text-secondary">
    </hr>
    <div class="container bg-dark">
        <div class="row d-flex justify-content-center ">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)) {

                $count = count($uploaded);
               
                foreach ($uploaded as $uoloadedd) {
                    $uploadext = "uploads/" . $uoloadedd["name"];
                    move_uploaded_file($uoloadedd["tmp"], $uploadext);
                    echo "<div class='card m-2 mb-3 bg-secondary' style='width: 18rem; display:inline-block;'>";
                    echo "<img src='$uploadext' class='img-thumbnail card-img-top mt-3' width='200'>";
                    echo "<div class='card-body'>";
                    echo "<p class='text-white'>" . $product_name . "</p>";
                    echo "<p class='card-text text-white'>" . $description . "</p>";
                    echo "<p class='card-text text-white '>" . 'added by <a href="" class="text-decoration:underlin text-dark">' . $email . '</a>' . '</p>';
                    echo "</div></div>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>