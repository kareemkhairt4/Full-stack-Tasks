
<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class=" p-4 bg-info">
    <div class="container ">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-4 p-4 bg-white rounded-4 ">
                <form method="post" action="profile.php" >
                    <div class="mb-3 col-12">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="fullname" >

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="emai" aria-describedby="email" required>

                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text"  name="age" class="form-control" id="age" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="city" aria-describedby="city" required>

                    </div>
                    <button type="submit" class="w-100 mb-3 btn btn-primary bg-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    
  </div>
</div>
</body>

</html>