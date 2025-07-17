<?php
$values = [
  ['Name' => "Laptop", "Price" => 15000, "Quantity" => 3],
  ['Name' => "Phone", "Price" => 8000, "Quantity" => 5],
  ['Name' => "Tablet", "Price" => 6000, "Quantity" => 2],
]

  ?>

<!DOCTYPE html>
<html>

<head>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>



<body class=" p-5 bg-secondary ">
  <div class="container mt-4">
    <div class="row p-3 ">
      <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">Name      </th>
            <th scope="col">Price(EGP)</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($values as $key => $value): ?>
            <tr <?php if ($key == 0 || $key == 2)
                     {
                       echo "class='table-secondary'";
                     } ?>>
              <td><?= $value['Name']      ?></td>
              <td><?= $value['Price']     ?></td>
              <td><?= $value['Quantity']  ?></td>
            </tr>
            
          <?php endforeach; ?>
        </tbody>


      </table>

    </div>

  </div>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>