<?php
$Salarys = [
    "Mona" => 6000,
    "KareeM" => 3000,
    "Tarek" => 7000,
    "Mahmoud" => 4000,
    "Ziad" => 5500
];

$arr = array_filter($Salarys, function ($salary) {
    return $salary >= 5000;
});
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-secondary"></body>

<div class="container mt-5">
    <h2 class=" text-primary-emphasis"> High Salary Employees</h2>
    <ul class="list-group ">
        <?php foreach ($arr as $k => $v): ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?= $k ?></span>
                <span class="badge bg-black rounded"><?= $v . " EGP" ?></span>
            </li>
        <?php endforeach; ?>

    </ul>

    <table class="table table-hover mt-4">
        <thead class="table-dark">
          <tr>
            <th scope="col">Name      </th>
            <th scope="col">Price(EGP)</th>
           
          </tr>
        </thead>
        <tbody>
          <?php foreach ($arr as $key => $value): ?>
            <tr <?php if ($key ==  "Mona"|| $key == "Ziad" )
                     {
                       echo "class='table-secondary'";
                     } ?>>
              <td><?= $key    ?></td>
              <td><?= $value  ?></td>
              
            </tr>
            
          <?php endforeach; ?>
        </tbody>


      </table>
</div>
</body>

</html>