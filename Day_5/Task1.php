<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class=" p-4 bg-success">
    <div class="container ">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-4 p-4  ">

                <ul class="list-group">
                
                    <li class="list-group-item"><?php echo "PHP_SELF   => " . $_SERVER["PHP_SELF"]; ?></li>
                    <li class="list-group-item"><?php echo "SERVER_NAME   => " . $_SERVER["SERVER_NAME"]; ?></li>
                    <li class="list-group-item"><?php echo "HTTP_HOST   => " . $_SERVER["HTTP_HOST"]; ?></li>
                    <li class="list-group-item"><?php echo "USER_AGENT   => " . $_SERVER["HTTP_USER_AGENT"]; ?></li>
                    <li class="list-group-item"><?php echo "REQUEST_METHOD   => " . $_SERVER["REQUEST_METHOD"]; ?></li>
                </ul>
            </div>

            <table class="table table-striped striped mt-5 bg-info">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Key</th>
                        <th scope="col">Value</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">PHP_SELF</td>
                        <td><?php echo $_SERVER["PHP_SELF"]; ?></td>

                    </tr>
                    <tr>
                        <td scope="row">SERVER_NAME</td>
                        <td><?php echo $_SERVER["SERVER_NAME"]; ?></td>

                    </tr>
                    <tr>
                        <td scope="row">HTTP_HOST</td>
                        <td><?php echo $_SERVER["HTTP_HOST"]; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">USER_AGENT</td>
                        <td><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">REQUEST_METHOD</td>
                        <td><?php echo $_SERVER["REQUEST_METHOD"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>