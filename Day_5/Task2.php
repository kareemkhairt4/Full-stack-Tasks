<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class=" p-4 ">
    <div class="container ">
        <div class="row mt-3 ">
            <div class="col-md-4 p-4  ">
                <?php
                if ($_SERVER["HTTP_HOST"] == "localhost")
                {
                   echo'  <div class=" alert alert-succes bg-success m-3" style="--bs-bg-opacity: .4;">
                      <H4> Access Ok : Right Host</h4> ' . "<br>  REQUEST_METHOD : ". $_SERVER["REQUEST_METHOD"] . "<br> REMOTE_ADDR  : " . $_SERVER["REMOTE_ADDR"].'</div>';
                     
                } else { 
                    echo ' <div class=" alert alert-succes bg-danger m-3" style="--bs-bg-opacity: .4;">  <h4> Access Denied : Invaild Host </h4> </div>';
                }

                ?>
            </div>
        </div>
    </div>

</body>

</html>