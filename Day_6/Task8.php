<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="mt-3 p-3 bg-dark">
    <form>
        <div class="input-group">
            <input type="text"
                class="form-control is-valid"
                placeholder="Student Name"
                pattern="[A-Z a-z]{2,10}"
                title="Name length must be (8=>10) characters"
                required>

            <input type="number"
                class="form-control is-valid"
                placeholder="student grade min=30 & max=100"
                min="30"
                max="100"
                title="Grade must be between (10 => 100)"
                required>


            <button class="btn btn-outline-success" type="submit">Submit</button>
        </div>
    </form>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>