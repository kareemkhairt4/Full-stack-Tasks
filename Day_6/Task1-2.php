<?php
$string = "hello, World!";

function gettotal($x, $y, $z) {
    return $x + $y + $z;
}

// Arrow function for tax calculation
$calculateTax = fn($price, $rate) => $price * ($rate / 100);

$length = strlen(trim(string: $string));
$output1 = str_replace("World", "bad", $string);
$output2 = substr($string, 0, 10);
$output3 = ucfirst($string);
$output4 = strtoupper($string);

$taxValue = $calculateTax(100, 20); // مثال: 15% على 100
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="p-4 bg-dark">
    <div class="container">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-6 p-4 mt-5 ml-4 shadow bg-dark rounded-4 text-white">

                <h2 class="text-white text-center">Total : <?php echo gettotal(10, 20, 30); ?></h2>
                <h4 class="text-white text-center">Tax (20% of 100) : <?php echo $taxValue; ?></h4>

                <?php
                    echo $length . "<br>";
                    echo $output1 . "<br>";
                    echo $output2 . "<br>";
                    echo $output3 . "<br>";
                    echo $output4 . "<br>";
                ?>

            </div>
        </div>
    </div>
</body>
</html>
